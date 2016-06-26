function roleToString(role) {
    switch (role) {
        case 1:
            return "admin";
        default:
            return "admin";
    }
}

function dataRow(row) {
    var tableRow = "<tr>";
    if (row.person) {
        tableRow += "<th>" + row.person.Name + "</th>";
        tableRow += "<th>" + row.person.LastName + "</th>";
        tableRow += "<th>" + row.person.MobileNumber + "</th>";
        tableRow += "<th>" + row.person.PhoneNumber + "</th>";
        tableRow += "<th>" + roleToString(row.person.role) + "</th>";
    }
    tableRow += "</tr>";
    return tableRow;
}

function dataToTable(data) {
    var table = "<tr><td>Name</td><td>Last name</td><td>Mobile number</td><td>Phone number</td><td>Role</td></td></tr>"
    for (var i = 0; i < data.length; i++) {
        table += dataRow(data[i]);
    }
    return table;
}

function getProject(projectId) {
    $.get("/api/v1/worksOnProject/" + projectId, "", function (data, status) {
        $("#worksOnProjects-table").html(dataToTable(data.data));
    });
}
