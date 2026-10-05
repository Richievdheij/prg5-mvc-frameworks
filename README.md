# prg5-mvc-frameworks

Starter projects for the PRG5 research report on backend MVC frameworks.

## Assignment

The report is an individual rapport written for a junior developer who has to choose a backend MVC framework for a small project (for example a personal portfolio) and for a large project (for example a webshop for a large retailer).

For each framework the report covers the

- Installation,
- Working starter project,
- The learning curve and the quality of support. It ends with a comparison and advice.

## Frameworks

The three frameworks were selected from a long list of eight backend MVC frameworks: Laravel, CodeIgniter 4, Symfony, Ruby on Rails, CakePHP, Yii 2, ASP.NET Core MVC and Spring Web MVC. The selection is based on accessibility, differences in structure and how manageable the research is.

| Folder          | Framework     | Language |
| --------------- | ------------- | -------- |
| `laravel/`      | Laravel       | PHP      |
| `codeigniter4/` | CodeIgniter 4 | PHP      |
| `symfony/`      | Symfony       | PHP      |

## Test project

Every framework gets the same starter project:

- an own route
- an own controller that passes three hard-coded products (name and price) to the view
- an own view that shows all three products in the browser

The same three products are used in all frameworks. There is no database and no styling.

## Structure

```
prg5-mvc-frameworks/
├── codeigniter4/
├── laravel/
├── symfony/
└── README.md
```

## Versions

| Framework     | Version | PHP | Composer |
| ------------- | ------- | --- | -------- |
| Laravel       |         |     |          |
| CodeIgniter 4 |         |     |          |
| Symfony       |         |     |          |

## Running

Add the run command per framework after the installation, copied from its official guide.

## Notes

- Each framework is installed fresh in its own folder, separate from any existing template.
- The screenshots and the analysis are in the report, not in this repository.
