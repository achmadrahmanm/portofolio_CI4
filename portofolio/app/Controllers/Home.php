<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function index2()
    {
        return view('index');
    }

    public function send_email()
    {
        $request = \Config\Services::request();

        // leave PropertyName blank to get all properties.
        $nama_customer = $request->getPost('name');
        $phone = $request->getPost('phone');
        $email = $request->getPost('email');
        $message = $request->getPost('message');

        // $nama_customer = $this->input->post('name');
        // $handphone = $this->input->post('phone');
        // $email = $this->input->post('email');
        // $pesan = $this->input->post('message');


        $messageBuilder = '<table border="0" cellpadding="0" cellspacing="1" style="text-align:center; width:1280px; font-family: system-ui;">
        					<tbody>

        						<tr>
        							<td>&nbsp;</td>
        							<td >' . $message . '<br /><br />
        							Pesan ditulis oleh <strong style="text-transform: capitalize;">' . $nama_customer . '</strong><br />
        							email : ' . $email . '<br>hp : ' . $phone . '<br /></td>
        							<td>&nbsp;</td>
        						</tr>

        					</tbody>
        				</table>';

        $email = \Config\Services::email();
        $email->setFrom('bot@koalajahat.my.id', 'Message from Portofolio Web');
        $email->setTo('achmadrahmanm@gmail.com');
        $email->setSubject('Message from Portofolio Web');
        $email->setMessage($messageBuilder); //your message here
        $email->send();
        // $email->printDebugger(['headers']);
        echo $messageBuilder;
        // return view('index');
    }
}
