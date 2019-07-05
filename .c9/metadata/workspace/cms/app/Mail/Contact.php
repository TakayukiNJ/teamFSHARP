{"filter":false,"title":"Contact.php","tooltip":"/cms/app/Mail/Contact.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":30,"column":34},"end":{"row":30,"column":35},"action":"remove","lines":["n"],"id":20}],[{"start":{"row":30,"column":34},"end":{"row":30,"column":35},"action":"insert","lines":["c"],"id":21}],[{"start":{"row":30,"column":35},"end":{"row":30,"column":36},"action":"insert","lines":["o"],"id":22}],[{"start":{"row":30,"column":36},"end":{"row":30,"column":37},"action":"insert","lines":["n"],"id":23}],[{"start":{"row":30,"column":37},"end":{"row":30,"column":38},"action":"insert","lines":["t"],"id":24}],[{"start":{"row":30,"column":38},"end":{"row":30,"column":39},"action":"insert","lines":["a"],"id":25}],[{"start":{"row":30,"column":39},"end":{"row":30,"column":40},"action":"insert","lines":["c"],"id":26}],[{"start":{"row":30,"column":40},"end":{"row":30,"column":41},"action":"insert","lines":["t"],"id":27}],[{"start":{"row":7,"column":43},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":28}],[{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":29}],[{"start":{"row":9,"column":0},"end":{"row":10,"column":36},"action":"insert","lines":["use App\\Mail\\Contact;","use Illuminate\\Support\\Facades\\Mail;"],"id":30}],[{"start":{"row":34,"column":5},"end":{"row":35,"column":0},"action":"insert","lines":["",""],"id":31},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":35,"column":4},"end":{"row":36,"column":0},"action":"insert","lines":["",""],"id":32},{"start":{"row":36,"column":0},"end":{"row":36,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":36,"column":4},"end":{"row":53,"column":1},"action":"insert","lines":["public function send(Request $request)","{","    $rules = [","        'name' => 'required|string',","        'email' => 'required|email',","        'message' => 'required'","    ];","    $this->validate($request, $rules);"," ","    $to = [","        ['email' => 'example@gmail.com', 'name' => 'Your Name']","    ];"," ","    $data = $request->only('name', 'email', 'message');","    Mail::to($to)->send(new Contact($data));"," ","    return redirect()->route('contact.result');","}"],"id":33}],[{"start":{"row":37,"column":0},"end":{"row":37,"column":4},"action":"insert","lines":["    "],"id":34},{"start":{"row":38,"column":0},"end":{"row":38,"column":4},"action":"insert","lines":["    "]},{"start":{"row":39,"column":0},"end":{"row":39,"column":4},"action":"insert","lines":["    "]},{"start":{"row":40,"column":0},"end":{"row":40,"column":4},"action":"insert","lines":["    "]},{"start":{"row":41,"column":0},"end":{"row":41,"column":4},"action":"insert","lines":["    "]},{"start":{"row":42,"column":0},"end":{"row":42,"column":4},"action":"insert","lines":["    "]},{"start":{"row":43,"column":0},"end":{"row":43,"column":4},"action":"insert","lines":["    "]},{"start":{"row":44,"column":0},"end":{"row":44,"column":4},"action":"insert","lines":["    "]},{"start":{"row":45,"column":0},"end":{"row":45,"column":4},"action":"insert","lines":["    "]},{"start":{"row":46,"column":0},"end":{"row":46,"column":4},"action":"insert","lines":["    "]},{"start":{"row":47,"column":0},"end":{"row":47,"column":4},"action":"insert","lines":["    "]},{"start":{"row":48,"column":0},"end":{"row":48,"column":4},"action":"insert","lines":["    "]},{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"insert","lines":["    "]},{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "]},{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "]},{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"insert","lines":["    "]},{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":35,"column":4},"end":{"row":36,"column":0},"action":"insert","lines":["",""],"id":35},{"start":{"row":36,"column":0},"end":{"row":36,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":36,"column":4},"end":{"row":36,"column":5},"action":"insert","lines":["/"],"id":36}],[{"start":{"row":36,"column":5},"end":{"row":36,"column":6},"action":"insert","lines":["/"],"id":37}],[{"start":{"row":36,"column":6},"end":{"row":36,"column":7},"action":"insert","lines":[" "],"id":38}],[{"start":{"row":36,"column":7},"end":{"row":36,"column":11},"action":"insert","lines":["送信処理"],"id":53}],[{"start":{"row":41,"column":40},"end":{"row":42,"column":40},"action":"insert","lines":["","            'email' => 'required|email',"],"id":54}],[{"start":{"row":42,"column":17},"end":{"row":42,"column":18},"action":"remove","lines":["l"],"id":55}],[{"start":{"row":42,"column":16},"end":{"row":42,"column":17},"action":"remove","lines":["i"],"id":56}],[{"start":{"row":42,"column":15},"end":{"row":42,"column":16},"action":"remove","lines":["a"],"id":57}],[{"start":{"row":42,"column":14},"end":{"row":42,"column":15},"action":"remove","lines":["m"],"id":58}],[{"start":{"row":42,"column":13},"end":{"row":42,"column":14},"action":"remove","lines":["e"],"id":59}],[{"start":{"row":42,"column":13},"end":{"row":42,"column":14},"action":"insert","lines":["t"],"id":64}],[{"start":{"row":42,"column":14},"end":{"row":42,"column":15},"action":"insert","lines":["i"],"id":65}],[{"start":{"row":42,"column":15},"end":{"row":42,"column":16},"action":"insert","lines":["t"],"id":66}],[{"start":{"row":42,"column":16},"end":{"row":42,"column":17},"action":"insert","lines":["l"],"id":67}],[{"start":{"row":42,"column":17},"end":{"row":42,"column":18},"action":"insert","lines":["e"],"id":68}],[{"start":{"row":42,"column":32},"end":{"row":42,"column":38},"action":"remove","lines":["|email"],"id":69}],[{"start":{"row":41,"column":40},"end":{"row":42,"column":34},"action":"remove","lines":["","            'title' => 'required',"],"id":70}],[{"start":{"row":42,"column":35},"end":{"row":43,"column":34},"action":"insert","lines":["","            'title' => 'required',"],"id":71}],[{"start":{"row":43,"column":12},"end":{"row":43,"column":15},"action":"insert","lines":["// "],"id":72}],[{"start":{"row":48,"column":31},"end":{"row":48,"column":32},"action":"remove","lines":["e"],"id":73}],[{"start":{"row":48,"column":30},"end":{"row":48,"column":31},"action":"remove","lines":["l"],"id":74}],[{"start":{"row":48,"column":29},"end":{"row":48,"column":30},"action":"remove","lines":["p"],"id":75}],[{"start":{"row":48,"column":28},"end":{"row":48,"column":29},"action":"remove","lines":["m"],"id":76}],[{"start":{"row":48,"column":27},"end":{"row":48,"column":28},"action":"remove","lines":["a"],"id":77}],[{"start":{"row":48,"column":26},"end":{"row":48,"column":27},"action":"remove","lines":["x"],"id":78}],[{"start":{"row":48,"column":25},"end":{"row":48,"column":26},"action":"remove","lines":["e"],"id":79}],[{"start":{"row":48,"column":25},"end":{"row":48,"column":26},"action":"insert","lines":["n"],"id":80}],[{"start":{"row":48,"column":26},"end":{"row":48,"column":27},"action":"insert","lines":["j"],"id":81}],[{"start":{"row":48,"column":27},"end":{"row":48,"column":28},"action":"insert","lines":["."],"id":82}],[{"start":{"row":48,"column":28},"end":{"row":48,"column":29},"action":"insert","lines":["t"],"id":83}],[{"start":{"row":48,"column":29},"end":{"row":48,"column":30},"action":"insert","lines":["a"],"id":84}],[{"start":{"row":48,"column":30},"end":{"row":48,"column":31},"action":"insert","lines":["k"],"id":85}],[{"start":{"row":48,"column":31},"end":{"row":48,"column":32},"action":"insert","lines":["a"],"id":86}],[{"start":{"row":48,"column":32},"end":{"row":48,"column":33},"action":"insert","lines":["y"],"id":87}],[{"start":{"row":48,"column":33},"end":{"row":48,"column":34},"action":"insert","lines":["u"],"id":88}],[{"start":{"row":48,"column":34},"end":{"row":48,"column":35},"action":"insert","lines":["k"],"id":89}],[{"start":{"row":48,"column":35},"end":{"row":48,"column":36},"action":"insert","lines":["i"],"id":90}],[{"start":{"row":48,"column":60},"end":{"row":48,"column":69},"action":"remove","lines":["Your Name"],"id":91}],[{"start":{"row":48,"column":60},"end":{"row":48,"column":61},"action":"insert","lines":["D"],"id":92}],[{"start":{"row":48,"column":61},"end":{"row":48,"column":62},"action":"insert","lines":["i"],"id":93}],[{"start":{"row":48,"column":62},"end":{"row":48,"column":63},"action":"insert","lines":["g"],"id":94}],[{"start":{"row":48,"column":63},"end":{"row":48,"column":64},"action":"insert","lines":["i"],"id":95}],[{"start":{"row":48,"column":64},"end":{"row":48,"column":65},"action":"insert","lines":["t"],"id":96}],[{"start":{"row":48,"column":65},"end":{"row":48,"column":66},"action":"insert","lines":["a"],"id":97}],[{"start":{"row":48,"column":66},"end":{"row":48,"column":67},"action":"insert","lines":["k"],"id":98}],[{"start":{"row":48,"column":67},"end":{"row":48,"column":68},"action":"insert","lines":[" "],"id":99}],[{"start":{"row":48,"column":67},"end":{"row":48,"column":68},"action":"remove","lines":[" "],"id":100}],[{"start":{"row":48,"column":66},"end":{"row":48,"column":67},"action":"remove","lines":["k"],"id":101}],[{"start":{"row":48,"column":65},"end":{"row":48,"column":66},"action":"remove","lines":["a"],"id":102}],[{"start":{"row":48,"column":64},"end":{"row":48,"column":65},"action":"remove","lines":["t"],"id":103}],[{"start":{"row":48,"column":63},"end":{"row":48,"column":64},"action":"remove","lines":["i"],"id":104}],[{"start":{"row":48,"column":62},"end":{"row":48,"column":63},"action":"remove","lines":["g"],"id":105}],[{"start":{"row":48,"column":61},"end":{"row":48,"column":62},"action":"remove","lines":["i"],"id":106}],[{"start":{"row":48,"column":61},"end":{"row":48,"column":62},"action":"insert","lines":["H"],"id":107}],[{"start":{"row":48,"column":62},"end":{"row":48,"column":63},"action":"insert","lines":["G"],"id":108}],[{"start":{"row":48,"column":63},"end":{"row":48,"column":64},"action":"insert","lines":["S"],"id":109}],[{"start":{"row":48,"column":64},"end":{"row":48,"column":65},"action":"insert","lines":[" "],"id":110}],[{"start":{"row":48,"column":65},"end":{"row":48,"column":66},"action":"insert","lines":["N"],"id":111}],[{"start":{"row":48,"column":66},"end":{"row":48,"column":67},"action":"insert","lines":["A"],"id":112}],[{"start":{"row":48,"column":67},"end":{"row":48,"column":68},"action":"insert","lines":["K"],"id":113}],[{"start":{"row":48,"column":67},"end":{"row":48,"column":68},"action":"remove","lines":["K"],"id":114}],[{"start":{"row":48,"column":66},"end":{"row":48,"column":67},"action":"remove","lines":["A"],"id":115}],[{"start":{"row":48,"column":66},"end":{"row":48,"column":67},"action":"insert","lines":["a"],"id":116}],[{"start":{"row":48,"column":67},"end":{"row":48,"column":68},"action":"insert","lines":["k"],"id":117}],[{"start":{"row":48,"column":68},"end":{"row":48,"column":69},"action":"insert","lines":["a"],"id":118}],[{"start":{"row":48,"column":69},"end":{"row":48,"column":70},"action":"insert","lines":["j"],"id":119}],[{"start":{"row":48,"column":70},"end":{"row":48,"column":71},"action":"insert","lines":["o"],"id":120}],[{"start":{"row":55,"column":5},"end":{"row":56,"column":0},"action":"insert","lines":["",""],"id":121},{"start":{"row":56,"column":0},"end":{"row":56,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":56,"column":4},"end":{"row":57,"column":0},"action":"insert","lines":["",""],"id":122},{"start":{"row":57,"column":0},"end":{"row":57,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":57,"column":4},"end":{"row":60,"column":1},"action":"insert","lines":["public function result()","{","    return view('contact.result');","}"],"id":123}],[{"start":{"row":58,"column":0},"end":{"row":58,"column":4},"action":"insert","lines":["    "],"id":124},{"start":{"row":59,"column":0},"end":{"row":59,"column":4},"action":"insert","lines":["    "]},{"start":{"row":60,"column":0},"end":{"row":60,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":36,"column":4},"end":{"row":36,"column":7},"action":"insert","lines":["// "],"id":125},{"start":{"row":37,"column":4},"end":{"row":37,"column":7},"action":"insert","lines":["// "]},{"start":{"row":38,"column":4},"end":{"row":38,"column":7},"action":"insert","lines":["// "]},{"start":{"row":39,"column":4},"end":{"row":39,"column":7},"action":"insert","lines":["// "]},{"start":{"row":40,"column":4},"end":{"row":40,"column":7},"action":"insert","lines":["// "]},{"start":{"row":41,"column":4},"end":{"row":41,"column":7},"action":"insert","lines":["// "]},{"start":{"row":42,"column":4},"end":{"row":42,"column":7},"action":"insert","lines":["// "]},{"start":{"row":43,"column":4},"end":{"row":43,"column":7},"action":"insert","lines":["// "]},{"start":{"row":44,"column":4},"end":{"row":44,"column":7},"action":"insert","lines":["// "]},{"start":{"row":45,"column":4},"end":{"row":45,"column":7},"action":"insert","lines":["// "]},{"start":{"row":47,"column":4},"end":{"row":47,"column":7},"action":"insert","lines":["// "]},{"start":{"row":48,"column":4},"end":{"row":48,"column":7},"action":"insert","lines":["// "]},{"start":{"row":49,"column":4},"end":{"row":49,"column":7},"action":"insert","lines":["// "]},{"start":{"row":51,"column":4},"end":{"row":51,"column":7},"action":"insert","lines":["// "]},{"start":{"row":52,"column":4},"end":{"row":52,"column":7},"action":"insert","lines":["// "]},{"start":{"row":54,"column":4},"end":{"row":54,"column":7},"action":"insert","lines":["// "]},{"start":{"row":55,"column":4},"end":{"row":55,"column":7},"action":"insert","lines":["// "]},{"start":{"row":57,"column":4},"end":{"row":57,"column":7},"action":"insert","lines":["// "]},{"start":{"row":58,"column":4},"end":{"row":58,"column":7},"action":"insert","lines":["// "]},{"start":{"row":59,"column":4},"end":{"row":59,"column":7},"action":"insert","lines":["// "]},{"start":{"row":60,"column":4},"end":{"row":60,"column":7},"action":"insert","lines":["// "]}],[{"start":{"row":23,"column":8},"end":{"row":23,"column":11},"action":"insert","lines":["// "],"id":127}],[{"start":{"row":33,"column":8},"end":{"row":33,"column":11},"action":"insert","lines":["// "],"id":128}],[{"start":{"row":33,"column":8},"end":{"row":33,"column":11},"action":"remove","lines":["// "],"id":129}],[{"start":{"row":33,"column":63},"end":{"row":33,"column":64},"action":"remove","lines":[";"],"id":130}],[{"start":{"row":33,"column":43},"end":{"row":33,"column":62},"action":"remove","lines":["->with($this->data)"],"id":131}],[{"start":{"row":33,"column":33},"end":{"row":33,"column":34},"action":"insert","lines":["s"],"id":132}],[{"start":{"row":16,"column":4},"end":{"row":34,"column":5},"action":"remove","lines":["/**","     * Create a new message instance.","     *","     * @return void","     */","    public function __construct()","    {","        // $this->data['inputs'] = $data;","    }","","    /**","     * Build the message.","     *","     * @return $this","     */","    public function build()","    {","        return $this->view('emails.contact');","    }"],"id":134},{"start":{"row":16,"column":4},"end":{"row":37,"column":5},"action":"insert","lines":["","    public $data = [];"," ","    /**","     * Create a new message instance.","     *","     * @return void","     */","    public function __construct($data)","    {","        $this->data['inputs'] = $data;","    }"," ","    /**","     * Build the message.","     *","     * @return $this","     */","    public function build()","    {","        return $this->view('emails.contact')->with($this->data);","    }"]}],[{"start":{"row":39,"column":4},"end":{"row":39,"column":7},"action":"remove","lines":["// "],"id":135},{"start":{"row":40,"column":4},"end":{"row":40,"column":7},"action":"remove","lines":["// "]},{"start":{"row":41,"column":4},"end":{"row":41,"column":7},"action":"remove","lines":["// "]},{"start":{"row":42,"column":4},"end":{"row":42,"column":7},"action":"remove","lines":["// "]},{"start":{"row":43,"column":4},"end":{"row":43,"column":7},"action":"remove","lines":["// "]},{"start":{"row":44,"column":4},"end":{"row":44,"column":7},"action":"remove","lines":["// "]},{"start":{"row":45,"column":4},"end":{"row":45,"column":7},"action":"remove","lines":["// "]},{"start":{"row":46,"column":4},"end":{"row":46,"column":7},"action":"remove","lines":["// "]},{"start":{"row":47,"column":4},"end":{"row":47,"column":7},"action":"remove","lines":["// "]},{"start":{"row":48,"column":4},"end":{"row":48,"column":7},"action":"remove","lines":["// "]},{"start":{"row":50,"column":4},"end":{"row":50,"column":7},"action":"remove","lines":["// "]},{"start":{"row":51,"column":4},"end":{"row":51,"column":7},"action":"remove","lines":["// "]},{"start":{"row":52,"column":4},"end":{"row":52,"column":7},"action":"remove","lines":["// "]},{"start":{"row":54,"column":4},"end":{"row":54,"column":7},"action":"remove","lines":["// "]},{"start":{"row":55,"column":4},"end":{"row":55,"column":7},"action":"remove","lines":["// "]},{"start":{"row":57,"column":4},"end":{"row":57,"column":7},"action":"remove","lines":["// "]},{"start":{"row":58,"column":4},"end":{"row":58,"column":7},"action":"remove","lines":["// "]},{"start":{"row":60,"column":4},"end":{"row":60,"column":7},"action":"remove","lines":["// "]},{"start":{"row":61,"column":4},"end":{"row":61,"column":7},"action":"remove","lines":["// "]},{"start":{"row":62,"column":4},"end":{"row":62,"column":7},"action":"remove","lines":["// "]},{"start":{"row":63,"column":4},"end":{"row":63,"column":7},"action":"remove","lines":["// "]}],[{"start":{"row":40,"column":0},"end":{"row":40,"column":3},"action":"insert","lines":["// "],"id":136},{"start":{"row":41,"column":0},"end":{"row":41,"column":3},"action":"insert","lines":["// "]},{"start":{"row":42,"column":0},"end":{"row":42,"column":3},"action":"insert","lines":["// "]},{"start":{"row":43,"column":0},"end":{"row":43,"column":3},"action":"insert","lines":["// "]},{"start":{"row":44,"column":0},"end":{"row":44,"column":3},"action":"insert","lines":["// "]},{"start":{"row":45,"column":0},"end":{"row":45,"column":3},"action":"insert","lines":["// "]},{"start":{"row":46,"column":0},"end":{"row":46,"column":3},"action":"insert","lines":["// "]},{"start":{"row":47,"column":0},"end":{"row":47,"column":3},"action":"insert","lines":["// "]},{"start":{"row":48,"column":0},"end":{"row":48,"column":3},"action":"insert","lines":["// "]},{"start":{"row":50,"column":0},"end":{"row":50,"column":3},"action":"insert","lines":["// "]},{"start":{"row":51,"column":0},"end":{"row":51,"column":3},"action":"insert","lines":["// "]},{"start":{"row":52,"column":0},"end":{"row":52,"column":3},"action":"insert","lines":["// "]},{"start":{"row":54,"column":0},"end":{"row":54,"column":3},"action":"insert","lines":["// "]},{"start":{"row":55,"column":0},"end":{"row":55,"column":3},"action":"insert","lines":["// "]},{"start":{"row":57,"column":0},"end":{"row":57,"column":3},"action":"insert","lines":["// "]},{"start":{"row":58,"column":0},"end":{"row":58,"column":3},"action":"insert","lines":["// "]},{"start":{"row":60,"column":0},"end":{"row":60,"column":3},"action":"insert","lines":["// "]},{"start":{"row":61,"column":0},"end":{"row":61,"column":3},"action":"insert","lines":["// "]},{"start":{"row":62,"column":0},"end":{"row":62,"column":3},"action":"insert","lines":["// "]},{"start":{"row":63,"column":0},"end":{"row":63,"column":3},"action":"insert","lines":["// "]},{"start":{"row":64,"column":0},"end":{"row":64,"column":3},"action":"insert","lines":["// "]}],[{"start":{"row":8,"column":0},"end":{"row":10,"column":36},"action":"remove","lines":["","use App\\Mail\\Contact;","use Illuminate\\Support\\Facades\\Mail;"],"id":137}],[{"start":{"row":7,"column":43},"end":{"row":8,"column":0},"action":"remove","lines":["",""],"id":138}],[{"start":{"row":35,"column":4},"end":{"row":60,"column":8},"action":"remove","lines":["","    // 送信処理","//     public function send(Request $request)","//     {","//         $rules = [","//             'name' => 'required|string',","//             'email' => 'required|email',","//             'message' => 'required'","//             // 'title' => 'required',","//         ];","//         $this->validate($request, $rules);","     ","//         $to = [","//             ['email' => 'nj.takayuki@gmail.com', 'name' => 'DHGS Nakajo']","//         ];","     ","//         $data = $request->only('name', 'email', 'message');","//         Mail::to($to)->send(new Contact($data));","     ","//         return redirect()->route('contact.result');","//     }","    ","//     public function result()","//     {","//         return view('contact.result');","//     }"],"id":139}],[{"start":{"row":36,"column":0},"end":{"row":36,"column":3},"action":"remove","lines":["// "],"id":140}]]},"ace":{"folds":[],"scrolltop":176.109375,"scrollleft":0,"selection":{"start":{"row":36,"column":1},"end":{"row":36,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":8,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1547809325734,"hash":"accd8b2fe0c4a09fc388090c1a2383b8b55ad0ad"}