function doGet(e) {
  Logger.log('doGet called');
  return ContentService.createTextOutput('GET request received');
}

function doPost(e) {
  Logger.log('doPost called');
  var sheet = SpreadsheetApp.openById('1AEIevY7Kfe4vuCTW49ZjVuYownnUfeU0uNo-Lb65ebM').getActiveSheet();
  // Handle post request logic here.
  return ContentService.createTextOutput('POST request received');
}