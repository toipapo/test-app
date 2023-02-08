<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Test Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
  </head>

  <body class="body-dashboard">
    <div class="container2">
      <div class="d-flex justify-content-center align-items-center p-5">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProduct">
          Add Product
        </button>
      </div>
      <div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLabel">Add Product</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <form method="POST" action="{{  route('products.store')  }}">
              @csrf
              @method('POST')
              <div class="modal-body">
                <div class="form-floating my-2">
                  <input type="string" name="prod_name" class="form-control" id="prod_name">
                  <label for="floatingInput">Product Name</label>
                </div>
                <div class="form-floating my-2">
                  <input type="string" name="brand_name" class="form-control" id="brand_name">
                  <label for="floatingInput">Brand Name</label>
                </div>
                <div class="form-floating my-2">
                  <input type="integer" name="price" class="form-control" id="price">
                  <label for="floatingInput">Price</label>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
            </form>
          </div>
        </div>
      </div>  
      
      <table class="table table-bordered d-flex mx-auto justify-content-center align-items-center">
      <tr>
          <th style="display:none;"></th>
          <th>Product Name</th>
          <th>Brand Name</th>
          <th>Price</th>
          <th class="text-center">Options</th>
        </tr>
        @foreach ($products as $product)
        <tr>
          <td style="display:none;">{{  $product->id  }}</td>
          <td>{{  $product->prod_name  }}</td>
          <td>{{  $product->brand_name  }}</td>
          <td>{{  $product->price  }}</td>
          <td>
          <div class="row">
            <div class="col">
              <form action="{{  route('products.destroy', $product->id)  }}" method="POST">
                @csrf
                @method('DELETE')
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete?')">Delete</button>
              </form>
            </div>
            <div class="col">
              <form method="POST" action="{{  route('products.update', $product->id)  }}">
                @csrf
                @method('PATCH')
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editProduct-{{ $product->id }}">Edit</button>
                <div class="modal fade" id="editProduct-{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Edit Product</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
              
                      <div class="modal-body">
                        <input type="hidden" name="id" id="id" value="{{$product->id}}"/>
                        <div class="form-floating my-2">
                          <input type="string" name="prod_name" class="form-control" id="prod_name" value="{{  $product->prod_name  }}">
                          <label for="floatingInput">Product Name</label>
                        </div>
                        <div class="form-floating my-2">
                          <input type="string" name="brand_name" class="form-control" id="brand_name" value="{{  $product->brand_name  }}">
                          <label for="floatingInput">Brand Name</label>
                        </div>
                        <div class="form-floating my-2">
                          <input type="integer" name="price" class="form-control" id="price" value="{{  $product->price }}">
                          <label for="floatingInput">Price</label>
                        </div>
                      </div>
              
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          </td>
        </tr>
        @endforeach
      </table>
    </div>

    <!-- <div class="modal fade" id="editProduct" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">Edit Product</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <form method="POST" action="{{  route('products.store')  }}">
            @csrf
            @method('PATCH')
            <div class="modal-body">
              <input type="hidden" name="id" id="id" value="{{$product->id}}" id="id"/>
              <div class="form-floating my-2">
                <input type="string" name="prod_name" class="form-control" id="prod_name" value="{{  $product->prod_name  }}">
                <label for="floatingInput">Product Name</label>
              </div>
              <div class="form-floating my-2">
                <input type="string" name="brand_name" class="form-control" id="brand_name" value="{{  $product->brand_name  }}">
                <label for="floatingInput">Brand Name</label>
              </div>
              <div class="form-floating my-2">
                <input type="integer" name="price" class="form-control" id="price" value="{{  $product->price }}">
                <label for="floatingInput">Price</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Edit</button>
            </div>
          </form>
        </div>
      </div>
    </div>   -->
    
  
  </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>  </body>

</html>