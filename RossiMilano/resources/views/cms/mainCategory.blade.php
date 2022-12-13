@extends('master')
@section('content')
<div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
    <h1>Main Category</h1>
    <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
        <span><i class="mdi mdi-chevron-right"></i></span>Main Category</p>
</div>
<div class="row">
<div class="col-xl-4 col-lg-12">
    <div class="ec-cat-list card card-default mb-24px">
        <div class="card-body">
            <div class="ec-cat-form">
                <h4>Add New Category</h4>

                <form id="adding_form">
@csrf
                    <div class="form-group row">
                        <label for="text" class="col-12 col-form- label" >Name</label>
                        <div class="col-12">
                            <input id="text"  class="form-control here slug-title"name="name" type="text">
                            <span class="text-danger error-text name_err"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="slug" class="col-12 col-form-label" >Slug</label>
                        <div class="col-12">
                            <input id="slug" name="slug" class="form-control here set-slug" type="text">
                            <span class="text-danger error-text slug_err"></span>
                            <small>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-12 col-form-label">Sort Description</label>
                        <div class="col-12">
                            <textarea id="sortDescription" name="sortDescription" cols="40" rows="2" class="form-control"></textarea>
                            <span class="text-danger error-text sortDescription_err"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-12 col-form-label">Full Description</label>
                        <div class="col-12">
                            <textarea id="fullDescription" name="fullDescription" cols="40" rows="4" class="form-control"></textarea>
                            <span class="text-danger error-text fullDescription_err"></span>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-12 col-form-label">Product Tags <span>( Type and
                                make comma to separate tags )</span></label>
                        <div class="col-12">
                            <input type="text" class="form-control" id="group_tag" name="protuctTag" value="" placeholder="" data-role="tagsinput">
                            <span class="text-danger error-text protuctTag_err"></span>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<div class="col-xl-8 col-lg-12">
    <div class="ec-cat-list card card-default">
        <div class="card-body">
            <div class="table-responsive">
                <table id="responsive-data-table" class="table">
                    <thead>
                        <tr>
                            <th>Thumb</th>
                            <th>Name</th>
                            <th>Sub Categories</th>
                            <th>Product</th>
                            <th>Total Sell</th>
                            <th>Status</th>
                            <th>Trending</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td><img class="cat-thumb" src="assets/img/category/clothes.png" alt="Product Image" /></td>
                            <td>Clothes</td>
                            <td>
                                <span class="ec-sub-cat-list">
                                <span class="ec-sub-cat-count" title="Total Sub Categories">5</span>
                                <span class="ec-sub-cat-tag">T-shirt</span>
                                <span class="ec-sub-cat-tag">Shirt</span>
                                <span class="ec-sub-cat-tag">Dress</span>
                                <span class="ec-sub-cat-tag">Jeans</span>
                                <span class="ec-sub-cat-tag">Top</span>
                                </span>
                            </td>
                            <td>28</td>
                            <td>2161</td>
                            <td>ACTIVE</td>
                            <td><span class="badge badge-success">Top</span></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button"
                                        class="btn btn-outline-success">Info</button>
                                    <button type="button"
                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" data-display="static">
                                        <span class="sr-only">Info</span>
                                    </button>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="cat-thumb" src="assets/img/category/footwear.png" alt="Product Image" /></td>
                            <td>Footwear</td>
                            <td>
                                <span class="ec-sub-cat-list">
                                    <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                    <span class="ec-sub-cat-tag">Sports</span>
                                    <span class="ec-sub-cat-tag">Casual</span>
                                    <span class="ec-sub-cat-tag">safety shoes </span>
                                    <span class="ec-sub-cat-tag">Sandal</span>
                                </span>
                            </td>
                            <td>68</td>
                            <td>5161</td>
                            <td>ACTIVE</td>
                            <td><span class="badge bg-primary">Medium</span></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button"
                                        class="btn btn-outline-success">Info</button>
                                    <button type="button"
                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" data-display="static">
                                        <span class="sr-only">Info</span>
                                    </button>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="cat-thumb" src="assets/img/category/jewelry.png" alt="Product Image" /></td>
                            <td>Jewelry</td>
                            <td>
                                <span class="ec-sub-cat-list">
                                    <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                    <span class="ec-sub-cat-tag">necklace</span>
                                    <span class="ec-sub-cat-tag">chain</span>
                                    <span class="ec-sub-cat-tag">rings</span>
                                    <span class="ec-sub-cat-tag">earings</span>
                                </span>
                            </td>
                            <td>68</td>
                            <td>5161</td>
                            <td><span class="inactive">Inactive</span></td>
                            <td><span class="badge badge-success">Top</span></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button"
                                        class="btn btn-outline-success">Info</button>
                                    <button type="button"
                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" data-display="static">
                                        <span class="sr-only">Info</span>
                                    </button>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="cat-thumb" src="assets/img/category/perfume.png" alt="Product Image" /></td>
                            <td>Perfume</td>
                            <td>
                                <span class="ec-sub-cat-list">
                                    <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                    <span class="ec-sub-cat-tag">Clothes perfume</span>
                                    <span class="ec-sub-cat-tag">deodorant </span>
                                    <span class="ec-sub-cat-tag">Flower fragrance </span>
                                    <span class="ec-sub-cat-tag">Air Freshener</span>
                                </span>
                            </td>
                            <td>38</td>
                            <td>1561</td>
                            <td>ACTIVE</td>
                            <td><span class="badge bg-primary">Medium</span></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button"
                                        class="btn btn-outline-success">Info</button>
                                    <button type="button"
                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" data-display="static">
                                        <span class="sr-only">Info</span>
                                    </button>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="cat-thumb" src="assets/img/category/cosmetics.png" alt="Product Image" /></td>
                            <td>Cosmetics</td>
                            <td>
                                <span class="ec-sub-cat-list">
                                    <span class="ec-sub-cat-count" title="Total Sub Categories">10</span>
                                    <span class="ec-sub-cat-tag">Makeup kit</span>
                                    <span class="ec-sub-cat-tag">Hair gel</span>
                                    <span class="ec-sub-cat-tag">sunscreen</span>
                                    <span class="ec-sub-cat-tag">facewash</span>
                                    <span class="ec-sub-cat-tag">Body shop</span>
                                    <span class="ec-sub-cat-tag">Lipstick</span>
                                    <span class="ec-sub-cat-tag">eye liner</span>
                                    <span class="ec-sub-cat-tag">Hair Shampoo</span>
                                    <span class="ec-sub-cat-tag">Beauty Cream</span>
                                    <span class="ec-sub-cat-tag">Skin Serum</span>
                                </span>
                            </td>
                            <td>18</td>
                            <td>1061</td>
                            <td>ACTIVE</td>
                            <td><span class="badge bg-danger">Low</span></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button"
                                        class="btn btn-outline-success">Info</button>
                                    <button type="button"
                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" data-display="static">
                                        <span class="sr-only">Info</span>
                                    </button>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="cat-thumb" src="assets/img/category/glasses.png" alt="Product Image" /></td>
                            <td>Glasses</td>
                            <td>
                                <span class="ec-sub-cat-list">
                                    <span class="ec-sub-cat-count" title="Total Sub Categories">2</span>
                                    <span class="ec-sub-cat-tag">Sunglasses </span>
                                    <span class="ec-sub-cat-tag">Lenses </span>
                                </span>
                            </td>
                            <td>82</td>
                            <td>10061</td>
                            <td><span class="inactive">Inactive</span></td>
                            <td><span class="badge bg-primary">Medium</span></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button"
                                        class="btn btn-outline-success">Info</button>
                                    <button type="button"
                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" data-display="static">
                                        <span class="sr-only">Info</span>
                                    </button>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="cat-thumb" src="assets/img/category/bag.png" alt="Product Image" /></td>
                            <td>Bags</td>
                            <td>
                                <span class="ec-sub-cat-list">
                                    <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                    <span class="ec-sub-cat-tag">shopping bag</span>
                                    <span class="ec-sub-cat-tag">Gym backpack</span>
                                    <span class="ec-sub-cat-tag">purse </span>
                                    <span class="ec-sub-cat-tag">wallet </span>
                                </span>
                            </td>
                            <td>18</td>
                            <td>3061</td>
                            <td>ACTIVE</td>
                            <td><span class="badge badge-success">Top</span></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button"
                                        class="btn btn-outline-success">Info</button>
                                    <button type="button"
                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" data-display="static">
                                        <span class="sr-only">Info</span>
                                    </button>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="cat-thumb" src="assets/img/category/footwear.png" alt="Product Image" /></td>
                            <td>Footwear</td>
                            <td>
                                <span class="ec-sub-cat-list">
                                    <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                    <span class="ec-sub-cat-tag">Sports</span>
                                    <span class="ec-sub-cat-tag">Casual</span>
                                    <span class="ec-sub-cat-tag">safety shoes </span>
                                    <span class="ec-sub-cat-tag">Sandal</span>
                                </span>
                            </td>
                            <td>68</td>
                            <td>5161</td>
                            <td>ACTIVE</td>
                            <td><span class="badge bg-primary">Medium</span></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button"
                                        class="btn btn-outline-success">Info</button>
                                    <button type="button"
                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" data-display="static">
                                        <span class="sr-only">Info</span>
                                    </button>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="cat-thumb" src="assets/img/category/jewelry.png" alt="Product Image" /></td>
                            <td>Jewelry</td>
                            <td>
                                <span class="ec-sub-cat-list">
                                    <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                    <span class="ec-sub-cat-tag">necklace</span>
                                    <span class="ec-sub-cat-tag">chain</span>
                                    <span class="ec-sub-cat-tag">rings</span>
                                    <span class="ec-sub-cat-tag">earings</span>
                                </span>
                            </td>
                            <td>68</td>
                            <td>5161</td>
                            <td><span class="inactive">Inactive</span></td>
                            <td><span class="badge badge-success">Top</span></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button"
                                        class="btn btn-outline-success">Info</button>
                                    <button type="button"
                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" data-display="static">
                                        <span class="sr-only">Info</span>
                                    </button>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><img class="cat-thumb" src="assets/img/category/perfume.png" alt="Product Image" /></td>
                            <td>Perfume</td>
                            <td>
                                <span class="ec-sub-cat-list">
                                    <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                    <span class="ec-sub-cat-tag">Clothes perfume</span>
                                    <span class="ec-sub-cat-tag">deodorant </span>
                                    <span class="ec-sub-cat-tag">Flower fragrance </span>
                                    <span class="ec-sub-cat-tag">Air Freshener</span>
                                </span>
                            </td>
                            <td>38</td>
                            <td>1561</td>
                            <td>ACTIVE</td>
                            <td><span class="badge bg-primary">Medium</span></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button"
                                        class="btn btn-outline-success">Info</button>
                                    <button type="button"
                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" data-display="static">
                                        <span class="sr-only">Info</span>
                                    </button>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@stop


@section('js')
<script>

//////////////////////////////////// adding in ajax /////////////////////////////////////////////
$("#adding_form").submit(function(e){
e.preventDefault();
   var formValues = new FormData($(this)[0])
   deleteErrorMsg();
$.ajax({
headers: {
  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
},
 url:"/category",
 type:"POST",
 data:formValues,
 cache: false,
 processData: false,
 contentType: false,
  success:function(data){
    if($.isEmptyObject(data.error)){
                      console.log(data);
                      deleteDataCategory(data)
                      $('#modal-add').modal('hide');
      $('#table').append("<tr id='row"+data.id+"'><td>"+data.id+"</td><td></td><td class='name_"+data.id+"'>"+data.name+"</td> <td class='name_"+data.id+"'>"+data.name+"</td> <td><button type='submit' id='edit' value="+ data.id+" ><i class='fas fa-pen'></i></button> <button id='delet' value="+data.id+"><i class='fas fa-trash-alt'></i></button> </td></tr>");
      alertSucces( 'success','The data is added sucessfully.');


                  }else{
                      printErrorMsg(data.error);
                  }
  }
});
});

</script>
@stop
