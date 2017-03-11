<?php

namespace CodicePlugin\DocsUpcoming\Controllers;

use Carbon\Carbon;
use Codice\Http\Controllers\Controller;
use Codice\Note;

class UpcomingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        $notes = Note::mine()
            ->with('labels')
            ->where('expires_at', '>', Carbon::now())
            ->where('status', '0')
            ->orderBy('expires_at', 'asc')
            ->get();

        return view('docs-upcoming::upcoming', [
            'notes' => $notes,
        ]);
    }
}
