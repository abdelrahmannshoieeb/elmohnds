<?php

namespace App\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class Contacts extends Component
{
    public $contacts;

    
    public
    $statuses  = [
        'cancelled' => 'تم الالغاء',
        'seen' => 'مشاهدة',
        'sent' => 'العميل ارسله',
        'handled' => 'تم العمل',
    ]; 
    public $SearchId;

    public function mount(){
        $this->contacts = Contact::all();
    }


    public function updateStatus($contactId, $status)
    {
        $contact = Contact::find($contactId);

        if ($contact) {
            $contact->update([
                'status' => $status,
            ]);

            session()->flash('message', 'Status updated successfully.');
            $this->contacts = Contact::all(); // Refresh the contacts list
        } else {
            session()->flash('error', 'Contact not found.');
        }
    }


    public function delete($orderId)
    {
        $contact = Contact::find($orderId);
        if ($contact) {
            $contact->delete();
        }
        $this->contacts = Contact::all();
    }

    public function updatedSearchId()
    {
        $this->contacts = Contact::where('id', 'like', '%' . $this->SearchId . '%')->get();
    }
    public function render()
    {
        return view('livewire.contact.contacts');
    }
}
