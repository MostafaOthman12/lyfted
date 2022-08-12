<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Ramsey\Uuid\Rfc4122\Validator;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        return view("booking", ["type" => $request->type]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validator = request()->validate([
            'firstName' => 'required|max:15',
            'surName' => 'required|max:15',
            'address' => 'required|max:150',
            "date" => 'required',
            "time" => 'required',
            "phone" => 'required|max:25',
            "comment" => 'required|max:300',
        ]);
        if (!$validator) {
            return redirect('/booking')
                ->withErrors($validator, 'errors')
                ->withInput();
        }

        $book = new Booking();
        $book->firstName = request()->firstName;
        $book->surName = request()->surName;
        $book->address = request()->address;
        $book->date = request()->date;
        $book->time = request()->time;
        $book->phone = request()->phone;
        $book->comment = request()->comment;
        $book->Mservice = request()->type;
        $book->save();
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Booking $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Booking $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Booking $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Booking $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
