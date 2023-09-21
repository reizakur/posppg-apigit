<?php
void main() {
  String cli = "R00TEST"; // Replace with the actual value of cli
  
  switch (cli) {
    case "R00TEST":
      var response = [
        {"icpl": "ICP999", "warehouse": "R00TEST", "validfrom": "2018-09-17", "active": "Y"},
        // Add other JSON objects here for the R00TEST case
      ];
      print(response);
      break;
    case "BP114003":
      var response = [
        {"icpl": "ICBP03", "warehouse": "BP114003", "validfrom": "2023-01-04", "active": "Y"},
      ];
      print(response);
      break;
    case "BP063304":
      var response = [
        {"icpl": "ICBP03", "warehouse": "BP063304", "validfrom": "2023-01-27", "active": "Y"},
      ];
      print(response);
      break;
    default:
      var response = {"status": 404, "message": "Parameter Gak Sesuai"};
      print(response);
      break;
  }
}
?>