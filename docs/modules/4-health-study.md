---
layout: page
title: "Health study"
date: 2018-03-20 22:36:42
short-title: "Mod. 4"
show-in-nav-bar: true
teaching: 15
exercises: 5
questions: #add module questions
objectives: #add module objectives
keypoints: #add module key points
---

>Objectives
>- To learn about upload survey feature of Qualtrics and file formatting
>- To get a handle of survey blocks
>- To increase understanding of question types and be able to make critical choices
{: .objective}

In this module we're going to work on a single survey simultaneously.

We are going to be working from a scenario of running an `Health and Nutrition survey`. In this project we want to pose survey questions relating to:
* health
* psychological wellbeing
* physical exercise
* behaviour and culture

## _Health and Nutrition survey project_


## Importing a survey
One of the really cool features of Qualtrics is that you can compile a survey outside of the tool (say, in a text file) and then, as long as it is formatted in the right way with the right syntax, you can upload it and finish it off in Qualtrics. [Following a particular format](https://www.qualtrics.com/support/survey-platform/survey-module/survey-tools/import-and-export-surveys/#ImportingASurvey), Qualtrics can interpret your questions and assign them to specific question types once uploaded.

> When uploading a survey, Qualtrics distinguishes between **Simple** and **Advanced** formats. Simple formats basically caters for surveys which _only_ use multiple choice and matrix questions. Advanced caters for all other questions types.
>{: .note}

We have prepared an Qualtrics-formatted survey ready to upload. It is located in the `Qualtrics course pack` you downloaded at the beginning of the course, titled `nhanes13-14_abridged.txt`.

> This survey has been adapted from the [2013 National Health and Nutrition Examination Survey](). This survey began in the 1960s and has been running ever since. It is conducted by the US's Centre for Disease Control and Prevention (CDC) and has the responsibility for producing vital and health statistics for the country.
> We have created an abridged version of this survey for our example. (In real life it literally covers [hundreds of questions](https://wwwn.cdc.gov/Nchs/Nhanes/Search/variablelist.aspx?Component=Questionnaire&CycleBeginYear=2013) and incorporates interview-based questions, which is beyond our needs in this course). More information can be found [here](https://wwwn.cdc.gov/nchs/nhanes/continuousnhanes/overview.aspx?BeginYear=2013)

## Preparing survey for upload
Let's have a quick look at the .txt version of the pre-filled survey.

![raw_survey_format](/images/raw_survey_format.png)

#### <span style="color:purple">a. Advanced format</span>
For our survey we are using the `AdvancedFormat` option which allows us to be more specific about the types of questions we want to import (saving us time in configuring the survey once it's Qualtrics).
#### <span style="color:green">b. Blocks</span>
Next we can specify the blocks in the survey by using the syntax `[[Block: <block name>]]`. Blocks are used in Qualtrics to establish logical breaks between sections of the survey. For example here we have a block for questions about languages.

#### <span style="color:blue">c. Question type</span>
Then we can specify our question types by using `[[Question:` then identifying the type. This is done *before* the written question. For example, our first question  is a **multi-choice, multi-select** type which is written as `[[Question:MC:Multiselect]]` on the line before *What language(s) do you usually speak at home?*.

There are many, many options for question types with the *Advanced mode*. The basic types include:
- `MC` for multiple choice
- `Matrix` for a two-dimensional table
- `TextEntry` for free text fields

... and more specialty options like:
- `RankOrder` for respondents to [rank their choices](https://www.qualtrics.com/support/edit-survey/editing-questions/question-types-guide/standard-content/rank-order/), and
- `ConstantSum` for respondents to give a [proportional estimation of their choices](https://www.qualtrics.com/support/edit-survey/editing-questions/question-types-guide/specialty-questions/constant-sum/)

Here is a list of the [complete question types for uploaded surveys](https://www.qualtrics.com/support/survey-platform/survey-module/survey-tools/import-and-export-surveys/#PreparingAnAdvancedFormatTXTFile) that you can choose from in the **Advanced mode**.

#### <span style="color:red">d. Optional choices</span>
Then, for all question types that are not `TextEntry`, our question will be followed by a list of choices with the heading `[[Choices]]`. In our image above we have the format example for multiple choice, however **matrix** questions need an `[[AdvancedAnswer]]` heading for the choices on the horizontal axis, each preceded by `[[Answer]]`. For example, here is the raw format for **matrix** questions.

```
[[Question:Matrix]]
Question

[[Choices]]
Choice 1
Choice 2

[[AdvancedAnswer]]
[[Answer]]
Answer 1

[[Answer]]
Answer 2
```

You can find out more about the [right syntax for file format here](https://www.qualtrics.com/support/survey-platform/survey-module/survey-tools/import-and-export-surveys/#PreparingAnAdvancedFormatTXTFile).

## Import the survey

Ok, now let's upload the survey.

### Steps
1. On your **All Projects** dashboard, create a project.
2. Click on **Blank Survey Project**
3. For our survey project, let's call it `Health and Nutrition survey`
4. Click on **Tools** on the second level menu bar, then **Import/Export** and select **Import Survey..**. (Note the other options for importing and exporting here)
![import_survey](/images/import_survey.png)
5. Choose our raw survey from its location on the local computer and click **import**.
6. You may have to refresh your browser if you don't see the survey straight away.
7. The survey questions should appear after the `Default Question Block`. We can delete this block as it was only a placeholder. To delete the block, click on the **Block options** dropdown (located top-right corner of the block) and then select **Delete block...**.

We should now see our pre-formatted survey with all of the various question types and corresponding answers.

But pre-formatted surveys have a number of limitations when making them work exactly the way we want for our distribution. In the next module we'll start customising our `Health and Nutrition survey`.

## Next
> [Go to Module 5]({{ site.baseurl }}/modules/5-customise-survey){: .next-link}
