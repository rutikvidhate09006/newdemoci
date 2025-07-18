<?php

namespace App\Controllers;
 use App\Models\ContactModel;

class ContactController extends BaseController
{
public function contact_us(): string
{
    return $this->render('contact_us', ['title' => 'Contact Us']); // `$products` is automatically available
}

    public function Submitform()
{
    $model = new ContactModel();

    $data = [
        'name'       => $this->request->getPost('name'),
        'email'      => $this->request->getPost('email'),
        'phone'      => $this->request->getPost('phone'),
        'message'    => $this->request->getPost('message'),
        'created_at' => date('Y-m-d H:i:s'),
    ];

    if ($model->save($data)) {
        return redirect()->to(base_url('contact_us'))->with('success', 'Message sent!');
    } else {
        return redirect()->to(base_url('contact_us'))->with('error', 'Failed to send message.');
    }
}

}

