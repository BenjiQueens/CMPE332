-- Display all members of a particular organizing sub-committee  (allow the user to choose the sub-committee from a drop down menu).
SELECT first_name, last_name, committee_name
FROM committee_list, member
WHERE committee_name='sponsorship' AND member.member_ID=committee_list.member_ID;

-- For a particular hotel room, list all of the students housed in this room.
SELECT name
FROM attendee, student
WHERE attendee.ID=student.ID AND student.room_number=42;

-- Display the conference schedule for a particular day.
SELECT * 
FROM sessions
WHERE sess_date="2019-03-12";

-- List the sponsors (company name) and their level of sponsorship.
SELECT name, CASE
			WHEN cost_due=1000  THEN "Bronze"
			WHEN cost_due=3000  THEN "Silver"
			WHEN cost_due=5000  THEN "Gold"
			WHEN cost_due=10000 THEN "Platinum"
								ELSE "Nothing"
		END AS sponsorlevel
FROM attendee
WHERE attendee_type="Sponsor"; 

-- For a particular company, list the jobs that they have available.
SELECT *
FROM job
WHERE company_name="Hotdog not Hotdog";

-- List all jobs available.
SELECT * 
FROM job;

-- Show the list of conference attendees as 3 lists: students, professionals, sponsors.
SELECT name, attendee_type
FROM attendee
ORDER BY attendee_type;

-- add a new attendee. if the attendee is a student, add them to a hotel room_number


-- show the total intake of the conference broken down by total registration amounts and total sponsorship amounts.


-- Add a new sponsoring company
INSERT INTO company VALUES ('MichaelSoft', '1000', 'Platinum', '5');

--delete a sponsoring company and it's associated attendees
DELETE FROM company 
WHERE company_name='MichaelSoft';
DELETE FROM attendee
WHERE name='MichaelSoft';

--switch a session's day/time and/or location.

