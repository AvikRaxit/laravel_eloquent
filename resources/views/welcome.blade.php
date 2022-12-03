<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> --}}
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-md mt-5">
                <h2 class="text-center" style="color:red">Product List</h3>
                    <button type="button" class="btn btn-outline-danger btn-sm mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        +Add 
                    </button>

                    <button type="button" class="btn btn-outline-success btn-sm mb-4">
                        Delete Selected 
                    </button>
                <!-- JQuery Data Table start-->
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th><input class="form-check-input" type="checkbox" id="check" onchange="checkAll(this)" name="chk[]"></th>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Sub Category</th>
                            <th>Product Detail</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td> 
                            <td>1</td> 
                            <td>POCO X2</td>
                            <td>Mobile</td>
                            <td>Android Mobile</td>
                            <td>Very good phone</td>
                            <td>20000</td>
                        </tr>

                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td> 
                            <td>2</td> 
                            <td>MOTO GS5</td>
                            <td>Mobile</td>
                            <td>Android Mobile</td>
                            <td>Very good phone</td>
                            <td>16000</td>
                        </tr>
                    </tbody>
                    <tfoot class="mb-3"></tfoot>
                </table>
                <!-- JQuery Data Table end-->

                <!-- Modal form start -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">ADD PRODUCT</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                      <label for="recipient-name" class="col-form-label">Product Name:</label>
                                      <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                      <label for="message-text" class="col-form-label">Product Description:</label>
                                      <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Category:</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Sub Category:</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Status:</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                  </form>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-sm btn-outline-success">Save</button>
                            </div>
                        </div>
                        </div>
                    </div>
                <!-- Modal form end -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{asset('admin/js/demo.js')}}"></script>
</body>
</html>