{{$purchase->family_name}} {{$purchase->given_name}} さま

株式会社Fsharp運営局です。

この度は商品のご購入頂きありがとうございます。

以下の注文を承りました。
到着までしばらくお待ち下さい。

注文情報
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
購入日時：{{$purchase->created_at}}
お名前：{{$purchase->family_name}}{{$purchase->given_name}}
商品数：{{$purchase->amount}}

購入情報
@foreach($purchasedetails as $purchasedetail)
    〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜
    ブランド名：{{$purchasedetail->Brand->brand_name}}
    商品名：{{$purchasedetail->Sku->item_name}}
    サイズ：{{$purchasedetail->Sku->Size->size_name}}
    金額：{{number_format($purchasedetail->price)}}円
@endforeach
〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜〜
購入金額：{{number_format($purchase->totalcost)}}円
お届け先住所：〒{{$purchase->postal_code}} {{$purchase->add1}}{{$purchase->add2}}{{$purchase->add3}}{{$purchase->option}}
商品注文番号：{{$purchase->voucher_num}}
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝

＊このメールは商品到着まで削除しないようにお願い致します。
