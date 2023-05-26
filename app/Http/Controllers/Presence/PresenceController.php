<?php

namespace App\Http\Controllers\PresenceController;

use App\Models\Presence;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\PresenceRepositoryInterface;

class PresenceController extends Controller
{

    protected $Presence;

    public function __construct(PresenceRepositoryInterface $PresenceRepository )
    {
        $this->Presence = $PresenceRepository;
    }


    
    public function index()
    {
    return $this->Presence->index();
    }

    public function create($id)
    {
        return $this->Presence->create($id);
        
    }

    
    public function store(Request $request)
    {
        return $this->Presence->store($request);
    }

    public function show($id)
    {
      return $this->Presence->show($id);
    }

 
    public function edit($id)
    {
        return $this->Presence->edit($id);
     
    }

   
    public function update(Request $request)
    {
        return $this->Presence->update($request);
    }

    
    public function destroy(Request $request)
    {
        return $this->Presence->destroy($request);
    }
}