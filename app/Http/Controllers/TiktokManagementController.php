<?php

namespace App\Http\Controllers;

use App\Models\Tiktok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TiktokManagementController extends Controller
{
    public function showTitokForm() {
        return view('tiktoks.tiktok');
    }

    public function storeTiktok(Request $request) {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'url' => ['required', 'regex:/^(https?:\/\/)?(www\.)?(tiktok\.com|vm\.tiktok\.com)\/.+$/'],
            'network' => ['required', 'integer'],
            'view' => ['required', 'integer'],
            'price' => ['required', 'integer'],
            'description' => ['nullable', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Store the tiktok in the database
        $tiktok = new Tiktok();
        $tiktok->url = $request->url;
        $tiktok->network = $request->network;
        $tiktok->view = $request->view;
        $tiktok->price = $request->price;
        $tiktok->description = $request->description;
        $tiktok->user_id = Auth::user()->id;
        $tiktok->save();

        return redirect()->route('admin.tiktok')->with('message', 'Chạy tiktok thành công, vui lòng đợi trong ít phút');
    }

    public function showAllTiktoks(Request $request) {
        $search = $request->input('search');
        // dd($search);
        $sql = Tiktok::with(['user']);
        if (isset($search) && !empty($search['url'])) {
            $sql->where('url', 'LIKE', '%'. $search['url']. '%');
        }

        if (isset($search) &&!empty($search['view'])) {
            $sql->where('view', '>=', $search['view']);
        }

        if (isset($search) &&!empty($search['status'])) {
            $sql->where('status', $search['status']);
        }


        $tiktoks = $sql->orderBy('created_at', 'desc')->paginate(5);
        return view('tiktoks.list', compact('tiktoks', 'search'));
    }
}
