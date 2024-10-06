

for(var age = 18; age <= 65; age++){
  //selectタグ取得
  var selectAge = document.getElementById('select-age');
  //optionタグ作成
  var ageOption = document.createElement('option');
  console.log(ageOption);
  //optionタグのテキストを設定
  ageOption.text = age + "歳";
  //optionタグのvalueを設定
  ageOption.value = age;
  //selectタグの子要素にoptionタグを追加
  selectAge.add(ageOption);
};