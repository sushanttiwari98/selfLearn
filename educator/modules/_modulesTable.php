<?php

echo "<table class='table' id='myTable'>";

    echo "<thead>
        <tr>
            <th scope='col'>module ID</th>
            <th scope='col'>module Title</th>
            <th scope='col'>module FileName</th>
            <th scope='col'>Action</th>
        </tr>
    </thead>
    <tbody>";
    
    $sql = "SELECT * FROM `python`";
    $result = mysqli_query($con, $sql);
    if($result){
        
        while ($row = mysqli_fetch_assoc($result)){
            
            $moduleID = $row["moduleID"];
            $moduleNo = $row["moduleNo"];
            $moduleTitle = $row["moduleTitle"];
            $moduleDescription = $row["moduleDescription"];
            $moduleFileName = $row["moduleFileName"];

            include "_moduleVideoModal.php";
            // include "_updatemoduleModal.php";
            // include "_deletemoduleModal.php";
            
            echo "<tr>
            <th scope='row'>$moduleID</th>
            <td>$moduleTitle</td>
            <td>$moduleFileName</td>
            <td class='d-flex'>
                <button type='button' class='btn text-success' data-bs-toggle='modal' data-bs-target='#moduleVideoModal$moduleID'><i class='bi bi-pencil-square h5'></i></button>
                <button type='button' class='btn text-success' data-bs-toggle='modal' data-bs-target='#updatemoduleModal$moduleID'><i class='bi bi-pencil-square h5'></i></button>
                <button type='button' class='btn text-danger' data-bs-toggle='modal' data-bs-target='#deletemoduleModal$moduleID'><i class='bi bi-trash h5'></i></button>
            </td>
            </tr>";
        }
    }


echo "
    </tbody>
</table>";

?>