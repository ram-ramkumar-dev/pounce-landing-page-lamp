<?php
// app/Http/Controllers/SubscriptionController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DrewM\MailChimp\MailChimp;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $mailchimp = new MailChimp(env('MAILCHIMP_API_KEY'));
        $list_id = env('MAILCHIMP_AUDIENCE_ID');

        $result = $mailchimp->post("lists/$list_id/members", [
            'email_address' => $request->email,
            'status' => 'subscribed',
        ]);

        if ($result['status'] === 'subscribed') {
            return response()->json(['message' => 'Subscribed successfully'], 201);
        } else {
            return response()->json(['error' => $result['title']], 500);
        }
    }
}
