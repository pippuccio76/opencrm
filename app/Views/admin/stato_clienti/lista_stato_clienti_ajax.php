

<?= $this->extend('templates/layout_admin') ?>

<?= $this->section('custom_css') ?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <!-- Page Header-->
<div class='card'>
        <div class='card-header'>
            <h4>Gestione Stato Clienti</h4>
        </div>
        <div class='card-body'>

      <div class="row " style="margin-right: 10px; margin-top: 20px;margin-bottom: 20px;">
<div class="col-md text-end">
<a  href="<?=base_url()?>/admin_Stato_clienti/inserisciRecord" class="btn btn-success" ><i class="fa fa-plus-square "></i>  Crea Stato Clienti </a>
</div>
</div>

        <?php if (session()->get('gestisciRecordOK')): ?>
          
            <div class="row" id="messagggi_info">
                <div class="col-md-12">

                        <div class="alert alert-success" role="alert" id="stanza_inserita">
                           <?= session()->get('gestisciRecordOK') ?>
                        </div>
              
                </div>
            </div>


            
        
        <?php endif ?>



      <div class="card-title d-flex align-items-center">
        <div><i class="bx bxs-user me-1 font-22 text-primary\"></i>
        </div>
        <h5 class="mb-0 text-primary"> Lista Stato_clienti</h5>
      </div>
            <div class="table-responsive">

                    <table id="tabella-catalogo" class="table dt-responsive activate-select cell-border table-hover" style="width: 100%;">

                    <thead>
                    <tr>
		                 <th class=''><i class='mdi mdi-filter'></i> Opzioni </th>
<th class=''>Nome</th>
<th class=''>Creato</th>
<th class=''>Modificato</th>

					</tr>
							</thead>
							<tbody>



 
			</tbody>
				</table>

</div>
</div>
</div>




<?= $this->endSection() ?>

<?= $this->section('script') ?>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
<script src="//cdn.datatables.net/plug-ins/1.10.13/sorting/datetime-moment.js"></script>

           <!-- Datatables -->

        <script>
            $(document).ready(function() {
				
                <?php if (session()->get('gestisciRecordOK') OR session()->get('gestisciRecordBad')): ?>

                    $('#messagggi_info').fadeOut(3000);

                <?php endif; ?>
                
                $.fn.dataTable.moment( 'DD-MM-YYYY HH:mm:ss');

				$("#tabella-catalogo").DataTable({
                     'processing': true,
                         'serverSide': true,
                         'serverMethod': 'post',
                         'order': [[6, 'desc']],
                         "lengthMenu": [[10, 25, 50,500, 200000000000], [10, 25, 50,500, "TUTTO"]],
                         'ajax': {
                            'url':"<?=base_url('/admin_Stato_clienti/get_data_from_ajax')?>",
                            'data': function(data){
                               // CSRF Hash
                               var csrfName = $('.txt_csrfname').attr('name'); // CSRF Token name
                               var csrfHash = $('.txt_csrfname').val(); // CSRF hash
                                

                               return {

                                  data: data,
                                  [csrfName]: csrfHash // CSRF Token
                               };
                            },
                            dataSrc: function(data){


                              // Update token hash
                              $('.txt_csrfname').val(data.token);

                              // Datatable data
                              return data.aaData;
                            }
                         },
                         'columns': [
                         			    { data: 'id' },
			    { data: 'nome' },
			    { data: 'created_at' },
			    { data: 'updated_at' },
			    { data: 'deleted_at' },
                   


                         ], dom: 'Bflrtip',
                         /*
                        buttons: [        
                        {
                            'extend': 'excel',
                            'text': '<button class="btn btn-success mb-1">Esporta i dati mostrati excel</button>',
                            'titleAttr': 'Excel',
                            'action': newexportaction
                        },
                        
                        ],*/
                        keys: true,
                });
                });
            </script>

<?= $this->endSection() ?>



