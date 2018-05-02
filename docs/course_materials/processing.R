file = "survey_data.xlsx"

library(XLConnect)

responses =loadWorkbook(file)
responses_ws = readWorksheet(responses, "survey_data", header= TRUE)
names(responses_ws) = responses_ws[1,]

responses_ws = responses_ws[2:nrow(responses_ws),]

responses_ws$gender = NA
responses_ws$age = NA
gender = c("Male", "Female")
age = c(16:80)


for (i in 2:nrow(responses_ws)){
    responses_ws$gender[i] = sample(gender)[1]
    responses_ws$age[i]=sample(age)[1]
}

responses_ws = responses_ws[, c((ncol(responses_ws)-1):ncol(responses_ws), 1:(ncol(responses_ws)-2))]
gc()

responses_ws = responses_ws[,c(1:7, 11:21, 8:10, 22:26)] 
write.csv(responses_ws, "survey_data_processed.csv", row.names = F)
