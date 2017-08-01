@extends('layouts.master')

@section('content')
    <div class="image-header valign-parent" id="contact-header">
        <div class="valign-child">
            <h1>Contact</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="material-shadow" id="contact-card">
                    <h3 class="text-center">How To Reach Us</h3>
                    <hr>
                    <div class="name"><i class="fa fa-address-book-o fa-3x contact-item-icon"></i>
                        <h3 class="contact-item">Bountiful Enterprises</h3>
                    </div>
                    <div class="contact-information">
                        <table>
                            <tbody>
                            <tr>
                                <td class="contact-item-icon"><i class="fa fa-envelope"></i></td>
                                <td class="contact-item">
                                    <p>Email</p>
                                </td>
                                <td class="right"><a href="mailto:contact@bountifulenterprises.com">contact@bountifulenterprises.com</a></td>
                            </tr>
                            <tr>
                                <td class="contact-item-icon"><i class="fa fa-phone"></i></td>
                                <td class="contact-item">
                                    <p>Phone Number</p>
                                </td>
                                <td class="right"><a href="tel:4172762520">(417) 276-2520</a></td>
                            </tr>
                            <tr>
                                <td class="contact-item-icon"><i class="fa fa-fax"></i></td>
                                <td class="contact-item">
                                    <p>Fax</p>
                                </td>
                                <td class="right">
                                    <p>(417) 276-0000</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="contact-item-icon"><i class="fa fa-clock-o"></i></td>
                                <td class="contact-item">
                                    <p>Hours of Operation</p>
                                </td>
                                <td class="right">
                                    <p>8AM - 5PM CST</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="contact-item-icon"><i class="fa fa-fax"></i></td>
                                <td class="contact-item">
                                    <p>Address</p>
                                </td>
                                <td class="right">
                                    <p>18500 E 800 Humansville<br>MO 65674</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="map-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="material-shadow" id="map">
                        <h3 class="text-center">How To Find Us</h3><a href="#map-modal" data-toggle="modal" data-target="#map-modal"><img src="images/contact-map.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="map-modal" tabindex="-1" role="dialog" aria-labelledby="map-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="g-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6307.45990074161!2d-93.7361065!3d37.7729298!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c5cfd4f7cf0b07%3A0xa484bad6f35747e0!2sBountiful+Enterprises!5e0!3m2!1sen!2sus!4v1498339724963" frameborder="0" style="border:0;" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection