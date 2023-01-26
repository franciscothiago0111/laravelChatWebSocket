<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use App\Events\Chat\SendMessage;



class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function listMessages(User $user)
    {

        try {
            $from = Auth::user()->id;
            $to = $user->id;

            $messages = Message::where(function ($query) use ($from, $to) {
                $query->where('from', $from)
                      ->where('to', $to);
            })
            ->orWhere(function ($query) use ($from, $to) {
                $query->where('from', $to)
                      ->where('to', $from);
            })
            ->orderBy('created_at', 'asc')  // sort messages by created_at in ascending order
            ->get();

            return response()->json(['success' => true, 'messages' => $messages], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Crie uma nova instância do modelo de mensagem
        $message = new Message();
        $message->to =  $request->to;
        $message->from = Auth::user()->id;
        $message->content = filter_var($request->content, FILTER_SANITIZE_STRIPPED);
        // Salve a mensagem no banco de dados
        $message->save();
        //var_dump($request->all());


        Event::dispatch(new SendMessage($message));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
