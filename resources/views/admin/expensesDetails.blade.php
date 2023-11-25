@extends('layouts.admin')
@section('content')
        <div class="page-wrapper cardhead">
            <div class="content ">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Expense Details</h3>
                        </div>
                    </div>

                    <div class="page-btn">
                        <a href="expensesAdd.html" class="btn btn-added"><img src="assets/img/icons/plus.svg"
                                class="me-2" alt="img"> Add New Expenses</a>
                    </div>
                </div>
                <div class="date-box">
                    <br>

                </div>


                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group">
                                <div class="card-header">
                                    <a class="card-title"><span id="todays-date"></span></a>
                                </div>


                                <a href="expensesDetails.html">
                                    <div class="outer-box">
                                        <div class="inner-box">
                                            <h3>ELECTRIC BILLS</h3>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="word-box">
                                                P5,600.00
                                            </div>
                                            <div class="sizes">

                                                <a id="viewimage" class="btn btn-warning">View Image</a>
                                                <a id="editexpenses"class="btn btn-success ">Edit</a>
                                                <a id="" class="btn btn-danger ">Delete</a>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="expensesDetails.html">
                                        <div class="outer-box">
                                            <div class="inner-box">
                                                <h3>WATER BILLS</h3>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="word-box">
                                                    P1,500.00
                                                </div>
                                                <div class="sizes">

                                                    <a id="viewimage" class="btn btn-warning">View Image</a>

                                                    <a id=""class="btn btn-success ">Edit</a>
                                                    <a id="" class="btn btn-danger ">Delete</a>
                                                </div>
                                            </div>
                                        </div>


                                        <a href="expensesDetails.html">
                                            <div class="outer-box">
                                                <div class="inner-box">
                                                    <h3>INTERNET BILLS</h3>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="word-box">
                                                        P3,000.00
                                                    </div>
                                                    <div class="sizes">

                                                        <a id="viewimage" class="btn btn-warning">View Image</a>
                                                        <a id=""class="btn btn-success ">Edit</a>
                                                        <a id="" class="btn btn-danger ">Delete</a>
                                                    </div>
                                                </div>
                                            </div>





                            </div>
                        </div>
                    </div>
                </div>
                <div id="showimage" class="modal">
                    <div class="modal-content">
                        <div class="modal-header">
                            <span class="close">&times;</span>
                            <h5 class="modal-title">View Image</h5>
                        </div>
                        <img src="assets/img/img-02.jpg" alt="Image">


                    </div>
                </div>

                <div id="expedit" class="modal">
                    <div class="modal-content">
                        <div class="modal-header">
                            <span class="close">&times;</span>
                            <h5 class="modal-title">Edit Expenses</h5>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message">Expenses Name</label>
                                        <input type="text" id="message" name="message" value="Electric Bill">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <br>
                                                <label for="message1">Amount</label>
                                                <input type="text" id="message1" name="message"
                                                    value="P5,600.00">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    /* BOX 1 */

                    .outer-box {

                        height: 200px;
                        max-width: 350px;
                        min-width: 365px;
                        margin-left: 20px;
                        margin-top: 45px;
                        display: inline-block;
                        border: 2px solid #000;
                        box-sizing: border-box;
                        border-radius: 10px;
                        background-color: #97cd96;
                        justify-content: center;
                        align-items: center;

                    }

                    .inner-box {

                        height: 45px;
                        max-width: 350px;
                        min-width: 364px;
                        margin-left: -1px;
                        margin-top: -1px;
                        display: inline-block;
                        border: 1px solid #000;
                        background-color: #348d34;
                        border-radius: 10px;
                        color: #000000;
                        font-size: 10px;
                        padding-top: 5px;
                        text-align: center;

                    }

                    .word-box {
                        text-align: center;
                        border-radius: 5px;
                        background-color: #ffffff;
                        border: 1px solid #000;
                        color: #000000;
                        height: 45px;
                        width: 320px;
                        margin-left: 20px;
                        margin-top: 25px;
                        padding-top: 10px;
                        font-size: 18px;

                    }


                    .modal {
                        display: none;
                        position: absolute;
                        z-index: 1;
                        left: 0;
                        top: 0;
                        width: 100%;
                        height: 128%;
                        overflow: auto;
                        padding-top: auto;
                        background-color: rgb(0, 0, 0);
                        background-color: rgba(0, 0, 0, 0.4);
                    }

                    .modal-content {
                        background-color: #fefefe;
                        margin: 10% auto;
                        padding: 10px;
                        border: 1px solid #888;
                        width: 40%;
                        height: auto;
                    }

                    .close {
                        color: #aaa;
                        float: right;
                        font-size: 100px;
                        font-weight: bold;
                        position: absolute;
                        top: 10px;
                        right: 10px;
                    }

                    .close:hover,
                    .close:focus {
                        color: black;
                        text-decoration: none;
                        cursor: pointer;
                    }

                    .btn-warning {
                        width: 35%;
                    }

                    .btn-danger {
                        width: 30%;
                    }

                    .btn-success {
                        width: 30%;
                    }

                    .sizes {
                        margin-left: 10px;
                        margin-top: 35px;
                    }
                </style>



                <script>
                    const dateElement = document.getElementById('todays-date');
                    const today = new Date();
                    const options = {
                        year: 'numeric',
                        month: 'long'
                    };
                    dateElement.textContent = today.toLocaleDateString(undefined, options);

                    document.getElementById('viewimage').addEventListener('click', function() {
                        document.getElementById('showimage').style.display = 'block';
                    });

                    document.getElementsByClassName('close')[0].addEventListener('click', function() {
                        document.getElementById('showimage').style.display = 'none';
                    });

                    document.addEventListener('keydown', function(event) {
                        if (event.key === 'Escape') {
                            document.getElementById('showimage').style.display = 'none';
                        }
                    });

                    document.getElementById('editexpenses').addEventListener('click', function() {
                        document.getElementById('expedit').style.display = 'block';
                    });

                    document.getElementsByClassName('close')[1].addEventListener('click', function() {
                        document.getElementById('expedit').style.display = 'none';
                    });

                    document.addEventListener('keydown', function(event) {
                        if (event.key === 'Escape') {
                            document.getElementById('expedit').style.display = 'none';
                        }
                    });
                </script>


            </div>

        </div>

    </div>
    </div>
    </div>

@endsection