@include('flight.admin.db-header')
<style>
    .btn {
    color: white;
    padding: .75rem 2.5rem;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    font-weight: bold;
    font-size: 1.2rem;
}
.btn-beginner{
    background-color: #4CAF50;
}
.btn-beginner:hover {
    background-color: #60c365;
}
  
.btn-intermediate {
    background: linear-gradient(to right, #FF416C, #FF4B2B);
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 10px;
    box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease-in-out;
}
  
.btn-intermediate:hover {
    transform: scale(1.1);
}

.btn-masterful {
    background-color: #00b7ff;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 50px;
    position: relative;
    overflow: hidden;
}
  
.btn-masterful .icon {
    position: absolute;
    top: 50%;
    left: 8px;
    transform: translateY(-50%);
    font-size: 24px;
}
.btn-masterful .btn-txt{
    padding-left: .5rem;
}
.btn-masterful:hover {
    background-color: #018dc5;
}
  
.btn-masterful:hover .icon {
    animation: rotate 2s linear infinite;
}
  
@keyframes rotate {
    from {transform: translateY(-50%) rotate(0deg);}
    to {transform: translateY(-50%) rotate(360deg);}
}
.attribute{
    position: absolute;
    bottom: 10px;
}
  
</style>
    <div class="dashboard__main">
      <div class="dashboard__content">
        <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
          <div class="col-auto">
                </br>
          </div>

          <div class="col-auto">

          </div>
        </div>


        <div class="py-30 px-30 rounded-4 bg-white custom_shadow">
          <div class="tabs -underline-2 js-tabs">
            <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

              <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">All Blog</button>
              </div>

            </div>

            <div class="tabs__content pt-30 js-tabs-content">

              <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="overflow-scroll scroll-bar-1">
                  <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                        <th>Title</th>
                        
                        <th>Author</th>
                        <th>Category</th>
                        <th>Slug</th>
                        <th>Image</th>
                        <th>is featured</th>
                        <th>status</th>
                        <th>Action</th>
                        
            </tr>
        </thead>
        <tbody>
            @if(isset($posts))    
                    @foreach($posts as $postss)    
                     <tr>
                       <td><?php print_r($postss->title);?></td>
                   
                       <td><?php print_r($postss->author_id);?></td>
                       <td><?php print_r($postss->category_id);?></td>
                       <td><?php print_r($postss->slug);?></td>
                       <td><img src="public/images/<?php print_r($postss->featured_image_url);?>" style="width:150px;"></td>
                       <td><?php print_r($postss->is_featured);?></td>
                        <td> <?php print_r($postss->status);?></td>
                       <td>
                          <div class="row x-gap-10 y-gap-10 items-center">

                             <div class="col-auto">
                           <a href="{{url('/edit-blog'.$postss->id)}}" class="btn btn-beginner btn_md">Edit</a>
                           
                                </div>
                            <div class="col-auto">
                           <a href="{{url('/blog-delete'.$postss->id)}}" class="btn btn-intermediate btn_md">Delete</a>
                                </div>
                            <!--<div class="col-auto">-->
                            <!--  <button class="flex-center bg-light-2 rounded-4 size-35">-->
                            <!--    <i class="icon-trash-2 text-16 text-light-1"></i>-->
                            <!--  </button>-->
                            <!--</div>-->

                          </div>
                        </td>
                      </tr>
                    @endforeach
                    @endif
        </tbody>
        <tfoot>
        </tfoot>
    </table>
                  </table>
                </div>
              </div>

            </div>
          </div>

          
        </div>
<link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css"  rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"  rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>


<script>
  $(document).ready(function() {
    $('#example').DataTable( {
      searching: true,
      info : true,
    paging: true,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf'
        ]
    } );
} );
</script>
@include('flight.admin.db-footer')