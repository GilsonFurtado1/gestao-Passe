import './bootstrap';
//import '../css/app.css';

window.confirmDelete = function(id){
    Swal.fire({
            title: "Tem certeza que deseja apagar este registo?",           
            text: "Esta ação não pode ser desfeita!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Sim, eliminar!",
            cancelButtonText: "Cancelar!"
            }).then ((result)=>{
               if(result.isConfirmed){
                document.getElementById('delete-form-'+id ).submit();
               }
            })
}