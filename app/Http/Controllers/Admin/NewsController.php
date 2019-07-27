<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //以下を追加
    public function add()
    {
    return view('admin.new.create');
}
}

//課題1
//フレームワークの中のコントローラーは何にあたる部分なんですか？

//課題2
//コントローラーは、データベース（Model）と、
//HTMLなどの見た目を生成するもの(View)とに役割を振り分けるもの

//課題3
//パソコンからルーティングにアクセスし、設定されたコントローラーに
//情報を渡す役割

//課題4
//Admin/ProfileControllerを作成を作成しました。
//課題5
public function add()
{
    return view('admin.profile.create');
}
  public function create()
  {
      return redirect('admin/profile/create');
  }

  public function edit()
  {
      return view('admin.profile.edit');
  }

  public function update()
  {
      return redirect('admin/profile/edit');
  }

