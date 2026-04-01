function doGet(e) {
  Logger.log('doGet called');
  return ContentService.createTextOutput('GET request received');
}

function doPost(e) {
  Logger.log('doPost called');
  var sheet = SpreadsheetApp.openById('https://script.google.com/macros/s/AKfycbzyEpzhnP4L9eAOygzVyj_863KKidWX9CpfEsgr87wNm8Fctk_eCdKiLA4r5Zi0t_4Vkw/exec').getActiveSheet();
  // Handle post request logic here.
  return ContentService.createTextOutput('POST request received');
}
