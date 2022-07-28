# sensor-value-SM3
# محتويات الملف 
<br />
1-index.html(نقوم بعرض القيم المخزنه في قاعدة البيانات )
<br />
2-getValue.php(نقوم بسحب قيمة الحساس وحفظها في قاعدة البيانات )
<br />
3-showValue.php(هذا الملف خاص بعرض البيانات التي قمنا بتخزينها وعرضها )

# طريقة عمل الموقع
اولا نقوم بادخال قيمة للحساس عن طريق الرابط التالي:
<br/>
https://yasseral-harbi.000webhostapp.com/GetSensorValue.php?sensor= + "قيمة الحساس "
<br />

مثال :
<br />
https://yasseral-harbi.000webhostapp.com/GetSensorValue.php?sensor=1
<br />

(سنقوم بادخال القيم موقتا هكذا الى ان نقوم بربطه معا الحساس لاخذ القيم الصحيحه)
<br />
<br />
ثانيا يمكننا عرض القيم التي تم حفظها عن طريق الرابط التالي :
https://yasseralharbi2.github.io/sensor-value-SM3/
<br />
# فديو 

<br />
# شرح للمهمه كاملة
الجزء الاول من المهمه:
<br />
<br />
قمنا بسحب قيم الحساس عن طريق GET 
<br />
![image](https://user-images.githubusercontent.com/110176361/181617733-bbfd0453-8a1f-46e3-8b08-747810f14b46.png)
<br />
<br />
الجزء الثاني من المهمه:
<br />
<br />
بعد ذلك قمنا بانشاء قاعدة بيانات لتخزين قيم الحساس كما هو موضح في الصور التالية:
<br />
<br />
![image](https://user-images.githubusercontent.com/110176361/181617890-11c38ede-799c-4dfc-8756-bb8cfa936b68.png)
<br />
<br />
![image](https://user-images.githubusercontent.com/110176361/181617992-849c55ef-b459-4d8a-9058-f4b4bbb8c6be.png)
<br />
<br />
الجزء الثالث من المهمه:

تخزين قيم الحساس في قاعدة البيانات عن طريق الرابط التالي:
https://yasseral-harbi.000webhostapp.com/GetSensorValue.php?sensor= + "قيمة الحساس "
<br />
<br />
مثال :
<br />
<br />
https://yasseral-harbi.000webhostapp.com/GetSensorValue.php?sensor=99
<br />
<br />

(سنقوم بادخال القيم موقتا هكذا الى ان نقوم بربطه معا الحساس لاخذ القيم الصحيحه)
<br />
<br />
هذا هو الكود الخاص بادخال البيانات الى قاعدة البيانات:
<br />
<br />
![image](https://user-images.githubusercontent.com/110176361/181622431-0f3239e0-0cd3-4946-a6b8-e6e9fb2ad446.png)
<br />
<br />
اذا تم ادخال البيانات بشكل صحيح سيتم طباعة : 
Done

اذا كان هناك اي خطا في الكويري سيتم طباعة :
incorrect SQL
<br />
<br />
بعض القيم التي تم حظفها في قاعدة البيانات:
<br />
<br />
![image](https://user-images.githubusercontent.com/110176361/181622558-1cc494e1-4b51-407f-ab5b-9d74ffef628c.png)
<br />
<br />
الجزء الاخير من المهمه:
<br />
<br />
عرض جميع البيانات المدخلة الى قاعدة البيانات في صفحة 
index.html
<br />
<br />
الكود الخاص بسحب البيانات من قاعدة البيانات وعرضها:
<br />
<br />
![image](https://user-images.githubusercontent.com/110176361/181622618-332e23c2-e4de-4af3-b009-2ca4465ff65f.png)
<br />
<br />




