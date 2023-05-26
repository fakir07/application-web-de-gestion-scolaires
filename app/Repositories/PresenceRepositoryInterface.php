<?php


namespace App\Repositories;

interface PresenceRepositoryInterface {


    public function index();
    public function create($id);
    public function show($id);
    public function edit($id);
    public function update($request);
    public function store($request);
    public function destroy($request);

    
}