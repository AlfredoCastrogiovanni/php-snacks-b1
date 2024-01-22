-- Selezionare tutti gli studenti il cui cognome finisce per "o"
SELECT * FROM `students` WHERE `surname` LIKE '%o';

-- Selezionare tutti gli appelli di esame con voto medio piu' alto di 28
-- SELECT * FROM `exam_student` WHERE AVG(`vote`) > 28 GROUP BY `exam_id`;

-- Selezionare tutti gli insegnanti che hanno la lettera s nel nome e il cui ufficio ha un numero maggiore di 96
SELECT * FROM `teachers` WHERE `name` LIKE '%s%' AND `office_number` > 96;

-- Contare i corsi (courses) che hanno lo stesso corso di laurea (degree)
SELECT `degree_id`, COUNT(*) AS `courses_number` FROM `courses` GROUP BY `degree_id`;