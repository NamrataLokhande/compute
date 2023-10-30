<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" /> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">  
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

   
    <style>
        <?-- this style-->
    body {
        margin:20;
        font-family:Arial,sans-serif
        }
       

       .button-container{
                 display:flex;
                height:4vh;
                background:#000080;
                padding:4px;
                border-radius: 8px;

        }
    .custom-btn{
            /*padding:4px 12px;*/
           padding: 6px 12px 6px 12px;
            margin:0 6px;
            font-size:10px;
            border:none;
            cursor:pointer;
            transition:color .3s;
            border-radius:20px
            }

    .custom-btn:hover{

            color:#ff9d5c
         }
   
         .search-box-container {
            display: flex;
            align-items: center;
            border-right: 1px solid black; /* Add border to the right side */
            padding-right: 8px; /* Add some padding on the right side */
        }

        .search-box {
        padding: 6px 12px 6px 12px;
        font-size: 12px;
        border: 1px solid black; /* Add black border */
        border-radius: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add shadow */
       transition: border-color 0.3s, box-shadow 0.3s;
      
       }
        .search-icon {
          
           /*margin-right: 2px; /* Add some space between the icon and text */
        
        }

        .upload-btn {
            padding: 8px 16px;
            font-size: 10px;
            border: none;
            cursor: pointer;
            transition: color 0.3s;
            border-radius: 20px;
        }

        .additional-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: white;
            border: 1px solid black; /* Add border */
            padding: 4px;
            margin-top: 6px; /* Add margin to create space */
        }

        .upload-container {
                display: flex;
                align-items: center;
            }

        .upload-label {
                margin-right: 80px;
                font-size: 14px; /* Increase font size */
                 color: #000000;
                
            }

        .plus-icon {
                    font-size: 20px; /* Increase icon size */
                    color: green; /* Set icon color to green */
                    margin-left: 4px; /* Add some space to the left of the icon */
                    
                }
    
          .process-row {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    margin-top: 6px; /* Add margin to create space */
                }

                .process-part {
                    flex: 1;
                    padding: 4px;
                    border: 1px solid black; /* Add border */
                    background: white;
                    font-size: 12px;
                }

        .process-part:contains("Process:Dialpro_process"):hover {
                         /* Add your hover effect styles here */
                                /* For example, change background color and add a border */
                    background-color: #f0f0f0;
                    border: 1px solid #ccc;
}
           .table-responsive {
             overflow-x: auto;
            margin-top: px;
                }

                /* Style for the table */
        .custom-table {  
                    width: 100%;
            max-width: 100%;
            margin-bottom: 10rem;
            color: white;
                }

        /* Style for table rows */
        .custom-table tbody tr {
            background-color: #f2f2f2;
            transition: background-color 0.3s;
             border-collapse: collapse;
            }
        .custom-table th {
                  /*  border: 1px solid #999; /* Adding border to th cells */
                    padding: 0.49rem;
                    vertical-align: top;
                    font-size: 12px;
                    height: 1vh;
                    background-color: green;
                    color: white;
                    border: 1px solid white; /* Add a white border */
                    text-align: center; /* Center the text */
                }

                /* Style for table cells (td) */
                .custom-table td {
                  /* padding: 0.25rem; */
                  background-color: white;
                  vertical-align: top;
                  font-size: 12px;
                  height: 1vh;

                  color: black; /* Set text color for table cells */
                  border: 1px solid #ccc; /* Add a border to the table cells */
                  text-align: center; /* Center the text */
                }
      
</style>
    <title>Button Example</title>
</head>
<body>
    <div class="button-container">
        <button class="btn btn-primary custom-btn">Active Dialing Lists</button>
        <button class="btn btn-secondary custom-btn">In-active Lists</button>
        <button class="btn btn-success custom-btn">dialer Generated Lists</button>
        <button class="btn btn-danger custom-btn">Lead Search</button>
    </div>
     <div class="additional-container">
          <div class="upload-container">
            <label class="upload-label">UPLOAD LISTS</label> 
            <span class="plus-icon" > <i class="fa fa-plus"></i></span>
        </div>
         <div class="search-box-container">
            <input type="text" class="search-box" placeholder="Search...">
            <span class="search-icon">&#128269;</span>
        </div>
    </div>
    <div class="process-container">
        <div class="process-row">
            <div class="process-part">Process:Dialpro_process</div>
            <div class="process-part">Type:Blended(Predictive)</div>
            <div class="process-part"> Running...</div>
        </div>
    </div>
    <div class="table-responsive">
        <table id="dataTable" class="table custom-table">
            <thead>
                <tr>
                    <th>SNo</th>
                    <th>List No</th>
                    <th>List Name</th>
                    <th>CRM</th>
                    <th>DIALED</th>
                    <th>To Be DIALED</th>
                    <th>No Of Leads</th>
                    <th>Active</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Table content goes here -->
                <tr>
                    <td>1</td>
                    <td>123</td>
                    <td>Sample List</td>
                    <td>Sample CRM</td>
                    <td>100</td>
                    <td>50</td>
                    <td>150</td>
                    <td>Yes</td>
                    <td><button>Action</button></td>
                </tr>
            </tbody>
        </table>
    </div>
       
</body>
</html>
