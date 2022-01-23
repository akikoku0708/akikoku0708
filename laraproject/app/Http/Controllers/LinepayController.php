<?
use Illuminate\Support\Str;

class LinePayController extends Controller
{
    private $channelId;
    private $channelSecretKey;

    public function __construct()
    {
        $this->channelId = '31649';
        $this->channelSecretKey = '7226ede341';
    }

    private function getAuthSignature($channelSecretKey, $uri, $requestBody, $nonce)
    {
        $data = $channelSecretKey . $uri . json_encode($requestBody) . $nonce;
        $hash = hash_hmac('sha256', $data, $channelSecretKey, true);
        return base64_encode($hash);
    }

    public function index() {
       $nonce = Str::uuid();
       $requestUri = '/v3/payments/request';
       $requestBody = [
                "amount" => 3,
                "currency" => JPY,
                "orderId" => zx12345,
                "packages" => [
                    [
                        "id" => 6789,
                        "amount" => 3,
                        "products" => [
                            [
                                "name" => 'pen',
                                "quantity" => 1,
                                "price" => 3,
                            ],
                        ],
                    ],
                ],
                "redirectUrls" => [
                    "confirmUrl" => '',
                    "cancelUrl" => '',
                ],
            ];

       // この$signatureをX-LINE-AuthorizationにセットすればOK
       $signature = $this->getAuthSignature($this->channelSecretKey, $requestUri, $requestBody, $nonce);

       // ヘッダーをつけてLINE PayサーバーにAPIリクエストを送信する
       $header = [
            "Content-Type: application/json",
            "X-LINE-ChannelId: {$this->channelId}",
            "X-LINE-Authorization-Nonce: {$nonce}",
            "X-LINE-Authorization: {$signature}",
        ];

       // 以下略
    }
}
