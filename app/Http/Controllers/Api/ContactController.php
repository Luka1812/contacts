<?php

namespace App\Http\Controllers\Api;

use App\Repository\ContactRepository;
use App\Http\Resources\ContactResource;

class ContactController extends Controller
{
    /**
     * Get contacts by limit and per page
     *
     * @param \App\Repository\ContactRepository $contactRepository
     * @return \Illuminate\Http\Response
     */
    public function index(ContactRepository $contactRepository)
    {
        $contacts = $contactRepository->get(30,15);
        
        $contactResource = new ContactResource($contacts);
        
        return $contactResource->collection($contacts);
    }
    
    /**
     * Show contact by id
     *
     * @param \App\Repository\ContactRepository $contactRepository
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(ContactRepository $contactRepository, $id)
    {
        $contact = $contactRepository->getById($id);
        
        $contactResource = new ContactResource($contact);
        
        return $contactResource;
    }
    
    /**
     * Find contact by id and update it
     *
     * @param \App\Repository\ContactRepository $contactRepository
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactRepository $contactRepository, $id)
    {
        $contact = $contactRepository->update($this->request, $id);
        
        $contactResource = new ContactResource($contact);
        
        return $contactResource;
    }
    
    /**
     * Insert new contact
     *
     * @param \App\Repository\ContactRepository $contactRepository
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function insert(ContactRepository $contactRepository)
    {
        $contact = $contactRepository->create($this->request);
        
        $contactResource = new ContactResource($contact);
        
        return $contactResource;
    }
    
    
    /**
     * Delete contact by id
     *
     * @param \App\Repository\ContactRepository $contactRepository
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete(ContactRepository $contactRepository, $id)
    {
        $contact = $contactRepository->deleteById($id);
        
        $contactResource = new ContactResource($contact);
        
        return $contactResource;
    }
}
