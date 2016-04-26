$(document).ready(function() {
    $('#example').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );

                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );

                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );
//PHOTO
//$(document).ready(function() {
//    $('#example').DataTable( {
//        initComplete: function () {
//            this.api().columns([1,2,3]).every( function () {
//                var column = this;
//                var select = $('<select><option value=""></option></select>')
//                    .appendTo( $(column.footer()).empty() )
//                    .on( 'change', function () {
//                        var val = $.fn.dataTable.util.escapeRegex(
//                            $(this).val()
//                        );
//
//                        column
//                            .search( val ? '^'+val+'$' : '', true, false )
//                            .draw();
//                    } );
//
//                column.data().unique().sort().each( function ( d, j ) {
//                    select.append( '<option value="'+d+'">'+d+'</option>' )
//                } );
//            } );
//        }
//    } );
//} );
//
// /**
// * Created by Marie on 26/04/2016.
// */
