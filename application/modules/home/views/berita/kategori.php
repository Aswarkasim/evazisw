 <!-- Categories Widget -->
 <div class="card my-4">
   <h5 class="card-header">Kategori</h5>
   <div class="card-body">
     <div class="row">
       <div class="col-lg-12">
         <ul class="list-unstyled mb-0">
           <?php foreach ($kategori as $row) { ?>
             <li>
               <a href="<?= base_url('home/berita/kategori/' . $row->id_kategori) ?>"><?= $row->nama_kategori; ?></a>
             </li>
           <?php } ?>
         </ul>
       </div>
     </div>
   </div>
 </div>