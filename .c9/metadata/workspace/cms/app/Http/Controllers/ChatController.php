{"filter":false,"title":"ChatController.php","tooltip":"/cms/app/Http/Controllers/ChatController.php","undoManager":{"mark":5,"position":5,"stack":[[{"start":{"row":49,"column":5},"end":{"row":50,"column":0},"action":"insert","lines":["",""],"id":50},{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":50,"column":4},"end":{"row":51,"column":0},"action":"insert","lines":["",""],"id":51},{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":51,"column":4},"end":{"row":70,"column":5},"action":"insert","lines":["public function sendMessage(Request $request)","    {","      // $message = $user->messages()->create([","      //   'message' => $request->input('message')","      // ]);","    ","      // broadcast(new MessageSent($user, $message))->toOthers();","      \\DB::table('messages')->insert(","          [","          'from'        => $request->from,    ","          'to'          => $request->to,      ","          'message'     => $request->message, ","          'read_flg'    => 0,                         // これ使わなそうだけど一応","          'delete_flg'  => 0,                         // これ使わなそうだけど一応","          'created_at'  => new Carbon(Carbon::now()), // 送った時刻","          'updated_at'  => new Carbon(Carbon::now())  // これ使わなそうだけど一応","          ]","      );    ","      return back();","    }"],"id":52}],[{"start":{"row":51,"column":20},"end":{"row":51,"column":31},"action":"remove","lines":["sendMessage"],"id":53},{"start":{"row":51,"column":20},"end":{"row":51,"column":31},"action":"insert","lines":["sendMessage"]}],[{"start":{"row":38,"column":4},"end":{"row":38,"column":7},"action":"insert","lines":["// "],"id":54},{"start":{"row":39,"column":4},"end":{"row":39,"column":7},"action":"insert","lines":["// "]},{"start":{"row":40,"column":4},"end":{"row":40,"column":7},"action":"insert","lines":["// "]},{"start":{"row":42,"column":4},"end":{"row":42,"column":7},"action":"insert","lines":["// "]},{"start":{"row":43,"column":4},"end":{"row":43,"column":7},"action":"insert","lines":["// "]},{"start":{"row":44,"column":4},"end":{"row":44,"column":7},"action":"insert","lines":["// "]},{"start":{"row":46,"column":4},"end":{"row":46,"column":7},"action":"insert","lines":["// "]},{"start":{"row":48,"column":4},"end":{"row":48,"column":7},"action":"insert","lines":["// "]},{"start":{"row":49,"column":4},"end":{"row":49,"column":7},"action":"insert","lines":["// "]}],[{"start":{"row":7,"column":27},"end":{"row":8,"column":18},"action":"insert","lines":["","use Carbon\\Carbon;"],"id":55}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":8,"column":18},"end":{"row":8,"column":18},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1560350393792,"hash":"de10d84a88b312aa82955a4610ad95b4dcedc9e2"}