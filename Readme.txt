1- In the DB member_record 
CREATE TABLE `members` 
and make the filds -- 4 = 
  `Id` int(11) NOT NULL,
  `CreatedDate` datetime NOT NULL,
  `Mname` varchar(50) NOT NULL,
  `ParentId` int(11) NOT NULL,
  `statusParent` tinyint(1) NOT NULL
to insert the record and design the table as per requirement. and one filed extra add in the table just for 
segrigation to the perent and child some perent they don't have any other parents that's the statusParent = 1 
and rest of the parent and child statusParent is 0.


Now logic --

1 - In the Index page call the data in index page use select query.
2 - call all the record in ul li and call the data where statusParent is 1 and parent id = Id
3 - make the model and use the select fields and input fileds and submit the data to call with ajax to send to the data in formdata to code page
then code page use the validation and check the fileds of record.
4 - now here in code page assign the status value of all the member who is new to assgin the statusParent is 0 
and assign the parentid = parent-memberid. 
5 - then call the query page which is member here now save the record in to the table members.    


