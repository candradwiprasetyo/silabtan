df<-read.table("d:\\xampp\\htdocs\\silabtan\\template\\report.txt", sep="\n",header=F, stringsAsFactor=F )
#print(df)
library(tm)

gsub2<- function(myPattern, myReplacement, myCorpus, perl=FALSE,ignore.case=FALSE){
  for (i in 1:length(myCorpus)){
    for (j in 1:length(myPattern)){
      myCorpus[[i]]<- gsub(myPattern[j],myReplacement[j], myCorpus[[i]], perl=TRUE)
    }
  }
  return(myCorpus)
}
corpus <- Corpus(VectorSource(df))
removeenter<-function(x) gsub("\n", "", x)
corpus<-tm_map(corpus, removeenter)
removetab<-function(x) gsub("\t", "", x)
corpus<-tm_map(corpus, removetab)
corpus <- tm_map(corpus, tolower)
#corpus <- tm_map(corpus, removeNumbers)

stopwords <- read.csv("D:\\xampp\\htdocs\\silabtan\\template\\source\\words.txt", sep="\n",header=F, stringsAsFactor=F)
stopwords <- stopwords[[1]]
corpus <- tm_map(corpus, removeWords, stopwords)


removepunct<-function(x) gsub("[[:punct:]]", " ", x)
corpus<-tm_map(corpus, removepunct)
alpha<-paste("\\b", "[[:alpha:]]","\\b", sep="")
removealpha<-function(x) gsub(alpha, "", x, perl=T)
corpus<-tm_map(corpus, removealpha)
corpus<-gsub2('([[:alpha:]])\\1+', '\\1\\1', corpus)

kdasar <- read.csv("D:\\xampp\\htdocs\\silabtan\\template\\source\\kdasar.txt", sep="\t", header=F, stringsAsFactor=F)
kdasar<-kdasar$V1
index<-c(rep(1:(length(corpus[[1]]))))
for(x in index){
  token<-scan_tokenizer(corpus[[1]][x])
  if(length(token)==0){
    corpus[[1]][x]<-NA
  }else{
    indexn<-c(rep(1:(length(token))))
    for(xn in indexn){
      if(token[xn] %in% kdasar==TRUE){
        
        token[xn]<-token[xn][token[xn] %in% kdasar]
        
      }else
        
      { token[xn]<-""}
    }
  }
  tokenstem<-paste(token, collapse=" ")
  corpus[[1]][x]<-tokenstem
}
corpus <- tm_map(corpus, stripWhitespace)

corpus2 <- tm_map(corpus, PlainTextDocument)
terms <-DocumentTermMatrix(corpus2)
terms2<-as.matrix(terms)
freq<-colSums(terms2)
freq<-sort(freq, decreasing=T)
write.table(freq, file="freq.txt", sep="\t", eol = "\n", col.names=F, quote=F)
