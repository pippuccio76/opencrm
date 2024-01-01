

<?= $this->extend('templates/layout_admin') ?>

<?= $this->section('custom_css') ?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
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

        <?php if (session()->get('gestisciRecordBad')): ?>
          
            <div class="row" id="messagggi_info">
                <div class="col-md-12">

                        <div class="alert alert-danger" role="alert" id="stanza_inserita">
                           <?= session()->get('gestisciRecordBad') ?>
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
			  <?php foreach ($lista as $row): ?>

				<tr>


              	   <td>


              			<a href='/user_Stato_clienti/modificaRecord/<?=$row->id?>'  class='btn btn-primary btn-xs'  title='modifica'><i class="fas fa-pencil-alt"></i></a>
              			<a href='/user_Stato_clienti/eliminaRecord/<?=$row->id?>' alt='elimina' class='btn btn-danger btn-xs' onClick="return confirm('Sei sicuro di voler eliminare il record?');" title='elimina'><i class="fas fa-trash-alt"></i></a>


              		</td>

                    <td> <?= $row->nome?></td>

                    <td> <?= date_local_format_from_iso_completa($row->created_at)?></td>

                    <td> <?= date_local_format_from_iso_completa($row->updated_at)?></td>

  </tr>
			<?php endforeach; ?>
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
				
				
                <?php if (session()->get('gestisciRecordOK')): ?>

                    $('#messagggi_info').fadeOut(3000);

                <?php endif; ?>
                

                $.fn.dataTable.moment( 'DD-MM-YYYY HH:mm:ss');

                $("#tabella-catalogo").DataTable({
				/*
                "columnDefs": [
                { "width": "15%", "targets": 0 },
                { "width": "6%", "targets": 1 },
                { "width": "6%", "targets": 2 },
                { "width": "10%", "targets": 3 },
                { "width": "10%", "targets": 4 },
                { "width": "3%", "targets": 5 },
                { "width": "5%", "targets": 6 },
                { "width": "5%", "targets": 7 },
                { "width": "5%", "targets": 8 },
                {"className": "mxn-table-center", "targets": [3, 4, 6, 7] },
                { "orderable": false, "targets": [2, 8] }
                ],*/
                        keys: true,
                        responsive: true,
                        select: true,
                        "language": {
                        "sEmptyTable":     "Nessun dato presente nella tabella",
                                "sInfo":           "Vista da _START_ a _END_ di _TOTAL_ Record",
                                "sInfoEmpty":      "Vista da 0 a 0 di 0 Record",
                                "sInfoFiltered":   "(filtrati da _MAX_ Record totali)",
                                "sInfoPostFix":    "",
                                "sInfoThousands":  ".",
                                "sLengthMenu":     "Mostra _MENU_ Record",
                                "sLoadingRecords": "Caricamento...",
                                "sProcessing":     "Elaborazione...",
                                "sSearch":         "Cerca:",
                                "sZeroRecords":    "Nessun risultato.",
                                "oPaginate": {
                                "sFirst":      "Inizio",
                                        "sPrevious":   "Precedente",
                                        "sNext":       "Successivo",
                                        "sLast":       "Fine"
                                },
                                "paginate": {
                                "previous": "<i class='mdi mdi - chevron - left'>",
                                        "next": "<i class='mdi mdi - chevron - right'>"
                                }
                        },
                        "drawCallback": function () {
                        $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
                        }
                });
                });
            </script>

<?= $this->endSection() ?>




