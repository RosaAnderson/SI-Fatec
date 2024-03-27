# Exec 01
/**
select p.id_professor AS CódigoProf,
       p.nome         AS NomeProf,
       p.sexo         AS Sexo,
       c.descritivo   AS Curso,
       d.descritivo   AS Disciplinas
from professores p
join disciplinas d
  on (d.id_professor = p.id_professor)
join cursos c
  on (c.id_curso = p.id_curso)
where p.sexo = 'M'
order by p.nome
/**/

# Exec 02
/**
select d.id_disciplina                            as CódigoDiscipla,
       d.descritivo                               as descritivo,
       concat('R$ ', format(d.valor, 2, 'de_DE')) as Valor,
       c.descritivo                               as Curso,
       p.nome                                     as Professor
from alunos a
JOIN cursos c
  on (a.id_curso = c.id_curso)
join alunos_disciplinas ad
  on (a.id_aluno = ad.id_aluno)
join disciplinas d
  on (d.id_disciplina = ad.id_disciplina)
join professores p
  on (p.id_professor = d.id_professor)
GROUP BY d.id_disciplina
order by d.descritivo
/**/

# Exec 03
/**
select 
       c.id_curso        as CódigoCurso,
       c.descritivo      as Descritivo,
       count(a.id_aluno) AS NroAlunos
from cursos c
join alunos a
  on (a.id_curso = c.id_curso)
GROUP BY c.id_curso
ORDER BY c.descritivo
/**/

# Exec 04
/**
select d.id_disciplina                            as CódigoDisciplina,
       c.descritivo                               as Curso,
       p.nome                                     as Professor,
       concat('R$ ', format(d.valor, 2, 'de_DE')) as valor,
       d.cargah                                   as CargaHoraria
       
from disciplinas d
join cursos c
  on (c.id_curso = d.id_curso)
join professores p
  on (p.id_professor = d.id_professor)
where d.valor < 250
  and d.cargah = 4
order by d.valor
/**/

# Exec 05
/**
select a.id_aluno   as CódigoAluno,
       a.nome       as NomeAluno,
       c.descritivo as Curso,
       count(ad.id_aluno_disc) as NroDisciplinas,
       concat('R$ ', format(sum(d.valor), 2, 'de_DE')) as ValorMensalidade
from alunos a
join alunos_disciplinas ad
  on (a.id_aluno = ad.id_aluno)
join cursos c
  on (c.id_curso = a.id_curso)
join disciplinas d
  on (d.id_disciplina = ad.id_disciplina)
group by a.id_aluno
/**/