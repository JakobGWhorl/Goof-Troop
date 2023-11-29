document.addEventListener('DOMContentLoaded', function () {
   
    let dropdown = document.getElementById('registration-type')
    let employeeform = document.getElementById('employeesregistration')
    let patientform = document.getElementById('patientsregistration')
    console.log(dropdown)
    //set employee form to display none
    employeeform.style.display='none';
    setupevent()

    function setupevent(){
        dropdown.addEventListener('change',function(event){
            console.log(event.target.value)
            let choice = event.target.value
            console.log(choice)
            if (choice == 'employee'){
                // console.log('ran employee');
                employeeform.style.display='flex';
                patientform.style.display='none';
                setupevent()
            }
            else{
                // console.log('ran patient');
                employeeform.style.display='none';
                patientform.style.display='flex';
                setupevent()
            }
        })
    }
    
})
