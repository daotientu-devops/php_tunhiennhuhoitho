<?php

namespace App\Http\Controllers;

use App\Core\Controllers\Controller;
use Illuminate\Http\Request;
use App\Core\Models\Page;
use App\Core\Models\Category;
use Config;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::where('page_type', '!=', 'landing')->get();
        return view('page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('page.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'content' => 'required',
                'status' => 'required'
            ]);
            $title = $request->get('title');
            $slug = sanitize($title);
            $content = $request->get('content');
            $plain_text = strip_tags($content);
            $file = $request->thumbnail_url;
            $original_name = '';
            if ($file) {
                $original_name = $file->getClientOriginalName();
            }

            $path = Config::get('constants.PATH_UPLOAD'); //upload path
            $yearDir = date('Y');
            $monthDir = date('m');
            $dayDir = date('d');

            $connection = ssh2_connect(Config::get('constants.SSH2.HOSTNAME'), Config::get('constants.SSH2.PORT'));
            ssh2_auth_password($connection, Config::get('constants.SSH2.USERNAME'), Config::get('constants.SSH2.PASSWORD'));
            $destinationPath = $path . '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/';

            $page = new Page([
                'title' => $title,
                'excerpt' => $request->get('excerpt'),
                'plain_text' => $plain_text,
                'content' => $content,
                'author_name' => $request->get('author_name'),
                'user_id' => $request->get('user_id'),
                'slug' => $slug,
                'status' => $request->get('status'),
                'category_id' => $request->get('category_id'),
                'thumbnail_url' => ($file) ? $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $original_name : '',
                'latitude' => $request->get('latitude'),
                'longitude' => $request->get('longitude'),
                'page_type' => 'landing',
                'meta_title' => $request->get('meta_title'),
                'meta_keyword' => $request->get('meta_keyword'),
                'meta_description' => $request->get('meta_description')
            ]);
            // T???o slug v?? check tr??ng slug (name)
            // Not ok th?? redirect v???i th??ng b??o trang t??nh ???? t???n t???i
            if (Page::where('slug', '=', $slug)->exists()) {
                return redirect('/page')->with('message', 'Trang t??nh ???? t???n t???i');
            } else {
                // Ok th?? upload file v?? save m???i
                if ($file) {
                    $handle = curl_init();
                    $url = Config::get('constants.SSH2.URL') . Config::get('constants.FOLDER_UPLOAD') . $yearDir . '/' . $monthDir . '/' . $dayDir . '/';
                    // Set the url
                    curl_setopt($handle, CURLOPT_URL, $url);
                    // Set the result output to be a string.
                    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
                    curl_exec($handle);
                    curl_close($handle);
                    ssh2_scp_send($connection, $file, $destinationPath . $original_name, 0644);
                }
                $page->save();
                return redirect('/page')->with('message', 'T???o m???i trang t??nh th??nh c??ng');
            }
        } catch (\Exception $exception) {
            return redirect('/page')->with('error', 'C?? l???i x???y ra: ' . $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  $page_id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $action = 'show';
        $page = Page::find($id);
        $category = Category::find($page->category_id);
        $categories = Category::all();
        return view('page.form', compact('action', 'page', 'category', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $action = 'edit';
        $page = Page::find($id);
        $category = Category::find($page->category_id);
        $categories = Category::all();
        return view('page.form', compact('action', 'page', 'category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required',
                'content' => 'required',
                'status' => 'required'
            ]);
            $title = $request->get('title');
            $slug = sanitize($title);
            $content = $request->get('content');
            $plain_text = strip_tags($content);
            $file = $request->thumbnail_url;
            $original_name = '';
            if ($file) {
                $original_name = $file->getClientOriginalName();
            }

            $path = Config::get('constants.PATH_UPLOAD'); //upload path
            $yearDir = date('Y');
            $monthDir = date('m');
            $dayDir = date('d');

            $connection = ssh2_connect(Config::get('constants.SSH2.HOSTNAME'), Config::get('constants.SSH2.PORT'));
            ssh2_auth_password($connection, Config::get('constants.SSH2.USERNAME'), Config::get('constants.SSH2.PASSWORD'));
            $destinationPath = $path . '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/';

            $page = Page::find($id);
            $page->title = $title;
            $page->excerpt = $request->get('excerpt');
            $page->plain_text = $plain_text;
            $page->content = $content;
            $page->author_name = $request->get('author_name');
            $page->user_id = $request->get('user_id');
            $page->slug = $slug;
            $page->status = $request->get('status');
            $page->category_id = $request->get('category_id');
            //$page->thumbnail_url = ($file) ? $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $original_name : ''; // Ch???c n??ng edit l???i ???nh ?????i di???n c???n xem l???i c?? ch??? thay ?????i
            $page->latitude = $request->get('latitude');
            $page->longitude = $request->get('longitude');
            $page->page_type = 'landing';
            $page->meta_title = $request->get('meta_title');
            $page->meta_keyword = $request->get('meta_keyword');
            $page->meta_description = $request->get('meta_description');

            if ($file) {
                $handle = curl_init();
                $url = Config::get('constants.SSH2.URL') . Config::get('constants.FOLDER_UPLOAD') . $yearDir . '/' . $monthDir . '/' . $dayDir . '/';
                // Set the url
                curl_setopt($handle, CURLOPT_URL, $url);
                // Set the result output to be a string.
                curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
                curl_exec($handle);
                curl_close($handle);
                ssh2_scp_send($connection, $file, $destinationPath . $original_name, 0644);
            }
            $page->save();
            return redirect('/page')->with('message', 'S???a trang t??nh th??nh c??ng');
        } catch (\Exception $exception) {
            return redirect('/page')->with('error', 'C?? l???i x???y ra: ' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $page = Page::find($id);
            $page->delete();
            return redirect('/page')->with('message', 'X??a b??i vi???t ' . $page->title . ' th??nh c??ng');
        } catch (\Exception $exception) {
            return redirect('/page')->with('error', 'C?? l???i x???y ra: ' . $exception->getMessage());
        }
    }
}
