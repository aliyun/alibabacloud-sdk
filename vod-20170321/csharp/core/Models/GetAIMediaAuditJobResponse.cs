// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetAIMediaAuditJobResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("MediaAuditJob")]
        [Validation(Required=true)]
        public GetAIMediaAuditJobResponseMediaAuditJob MediaAuditJob { get; set; }
        public class GetAIMediaAuditJobResponseMediaAuditJob : TeaModel {
            [NameInMap("JobId")]
            [Validation(Required=true)]
            public string JobId { get; set; }
            [NameInMap("MediaId")]
            [Validation(Required=true)]
            public string MediaId { get; set; }
            [NameInMap("Type")]
            [Validation(Required=true)]
            public string Type { get; set; }
            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }
            [NameInMap("Code")]
            [Validation(Required=true)]
            public string Code { get; set; }
            [NameInMap("Message")]
            [Validation(Required=true)]
            public string Message { get; set; }
            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }
            [NameInMap("CompleteTime")]
            [Validation(Required=true)]
            public string CompleteTime { get; set; }
            [NameInMap("Data")]
            [Validation(Required=true)]
            public GetAIMediaAuditJobResponseMediaAuditJobData Data { get; set; }
            public class GetAIMediaAuditJobResponseMediaAuditJobData : TeaModel {
                [NameInMap("Suggestion")]
                [Validation(Required=true)]
                public string Suggestion { get; set; }

                [NameInMap("AbnormalModules")]
                [Validation(Required=true)]
                public string AbnormalModules { get; set; }

                [NameInMap("Label")]
                [Validation(Required=true)]
                public string Label { get; set; }

                [NameInMap("ImageResult")]
                [Validation(Required=true)]
                public List<GetAIMediaAuditJobResponseMediaAuditJobDataImageResult> ImageResult { get; set; }
                public class GetAIMediaAuditJobResponseMediaAuditJobDataImageResult : TeaModel {
                    [NameInMap("Suggestion")]
                    [Validation(Required=true)]
                    public string Suggestion { get; set; }

                    [NameInMap("Label")]
                    [Validation(Required=true)]
                    public string Label { get; set; }

                    [NameInMap("Type")]
                    [Validation(Required=true)]
                    public string Type { get; set; }

                    [NameInMap("Url")]
                    [Validation(Required=true)]
                    public string Url { get; set; }

                    [NameInMap("Result")]
                    [Validation(Required=true)]
                    public List<GetAIMediaAuditJobResponseMediaAuditJobDataImageResultResult> Result { get; set; }
                    public class GetAIMediaAuditJobResponseMediaAuditJobDataImageResultResult : TeaModel {
                        [NameInMap("Suggestion")]
                        [Validation(Required=true)]
                        public string Suggestion { get; set; }

                        [NameInMap("Label")]
                        [Validation(Required=true)]
                        public string Label { get; set; }

                        [NameInMap("Score")]
                        [Validation(Required=true)]
                        public string Score { get; set; }

                        [NameInMap("Scene")]
                        [Validation(Required=true)]
                        public string Scene { get; set; }

                    }

                }

                [NameInMap("TextResult")]
                [Validation(Required=true)]
                public List<GetAIMediaAuditJobResponseMediaAuditJobDataTextResult> TextResult { get; set; }
                public class GetAIMediaAuditJobResponseMediaAuditJobDataTextResult : TeaModel {
                    [NameInMap("Suggestion")]
                    [Validation(Required=true)]
                    public string Suggestion { get; set; }

                    [NameInMap("Label")]
                    [Validation(Required=true)]
                    public string Label { get; set; }

                    [NameInMap("Score")]
                    [Validation(Required=true)]
                    public string Score { get; set; }

                    [NameInMap("Scene")]
                    [Validation(Required=true)]
                    public string Scene { get; set; }

                    [NameInMap("Type")]
                    [Validation(Required=true)]
                    public string Type { get; set; }

                    [NameInMap("Content")]
                    [Validation(Required=true)]
                    public string Content { get; set; }

                }

                [NameInMap("VideoResult")]
                [Validation(Required=true)]
                public GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult VideoResult { get; set; }
                public class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult : TeaModel {
                    [NameInMap("Suggestion")]
                    [Validation(Required=true)]
                    public string Suggestion { get; set; }
                    [NameInMap("Label")]
                    [Validation(Required=true)]
                    public string Label { get; set; }
                    [NameInMap("TerrorismResult")]
                    [Validation(Required=true)]
                    public GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult TerrorismResult { get; set; }
                    public class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult : TeaModel {
                        [NameInMap("Suggestion")]
                        [Validation(Required=true)]
                        public string Suggestion { get; set; }

                        [NameInMap("Label")]
                        [Validation(Required=true)]
                        public string Label { get; set; }

                        [NameInMap("MaxScore")]
                        [Validation(Required=true)]
                        public string MaxScore { get; set; }

                        [NameInMap("AverageScore")]
                        [Validation(Required=true)]
                        public string AverageScore { get; set; }

                        [NameInMap("CounterList")]
                        [Validation(Required=true)]
                        public List<GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultCounterList> CounterList { get; set; }
                        public class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultCounterList : TeaModel {
                            [NameInMap("Label")]
                            [Validation(Required=true)]
                            public string Label { get; set; }

                            [NameInMap("Count")]
                            [Validation(Required=true)]
                            public int? Count { get; set; }

                        }

                        [NameInMap("TopList")]
                        [Validation(Required=true)]
                        public List<GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultTopList> TopList { get; set; }
                        public class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultTopList : TeaModel {
                            [NameInMap("Label")]
                            [Validation(Required=true)]
                            public string Label { get; set; }

                            [NameInMap("Score")]
                            [Validation(Required=true)]
                            public string Score { get; set; }

                            [NameInMap("Timestamp")]
                            [Validation(Required=true)]
                            public string Timestamp { get; set; }

                            [NameInMap("Url")]
                            [Validation(Required=true)]
                            public string Url { get; set; }

                        }

                    }
                    [NameInMap("PornResult")]
                    [Validation(Required=true)]
                    public GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult PornResult { get; set; }
                    public class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult : TeaModel {
                        [NameInMap("Suggestion")]
                        [Validation(Required=true)]
                        public string Suggestion { get; set; }

                        [NameInMap("Label")]
                        [Validation(Required=true)]
                        public string Label { get; set; }

                        [NameInMap("MaxScore")]
                        [Validation(Required=true)]
                        public string MaxScore { get; set; }

                        [NameInMap("AverageScore")]
                        [Validation(Required=true)]
                        public string AverageScore { get; set; }

                        [NameInMap("CounterList")]
                        [Validation(Required=true)]
                        public List<GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultCounterList> CounterList { get; set; }
                        public class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultCounterList : TeaModel {
                            [NameInMap("Label")]
                            [Validation(Required=true)]
                            public string Label { get; set; }

                            [NameInMap("Count")]
                            [Validation(Required=true)]
                            public int? Count { get; set; }

                        }

                        [NameInMap("TopList")]
                        [Validation(Required=true)]
                        public List<GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultTopList> TopList { get; set; }
                        public class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultTopList : TeaModel {
                            [NameInMap("Label")]
                            [Validation(Required=true)]
                            public string Label { get; set; }

                            [NameInMap("Score")]
                            [Validation(Required=true)]
                            public string Score { get; set; }

                            [NameInMap("Timestamp")]
                            [Validation(Required=true)]
                            public string Timestamp { get; set; }

                            [NameInMap("Url")]
                            [Validation(Required=true)]
                            public string Url { get; set; }

                        }

                    }
                    [NameInMap("AdResult")]
                    [Validation(Required=true)]
                    public GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult AdResult { get; set; }
                    public class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult : TeaModel {
                        [NameInMap("Suggestion")]
                        [Validation(Required=true)]
                        public string Suggestion { get; set; }

                        [NameInMap("Label")]
                        [Validation(Required=true)]
                        public string Label { get; set; }

                        [NameInMap("MaxScore")]
                        [Validation(Required=true)]
                        public string MaxScore { get; set; }

                        [NameInMap("AverageScore")]
                        [Validation(Required=true)]
                        public string AverageScore { get; set; }

                        [NameInMap("CounterList")]
                        [Validation(Required=true)]
                        public List<GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultCounterList> CounterList { get; set; }
                        public class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultCounterList : TeaModel {
                            [NameInMap("Label")]
                            [Validation(Required=true)]
                            public string Label { get; set; }

                            [NameInMap("Count")]
                            [Validation(Required=true)]
                            public int? Count { get; set; }

                        }

                        [NameInMap("TopList")]
                        [Validation(Required=true)]
                        public List<GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultTopList> TopList { get; set; }
                        public class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultTopList : TeaModel {
                            [NameInMap("Label")]
                            [Validation(Required=true)]
                            public string Label { get; set; }

                            [NameInMap("Score")]
                            [Validation(Required=true)]
                            public string Score { get; set; }

                            [NameInMap("Timestamp")]
                            [Validation(Required=true)]
                            public string Timestamp { get; set; }

                            [NameInMap("Url")]
                            [Validation(Required=true)]
                            public string Url { get; set; }

                        }

                    }
                    [NameInMap("LiveResult")]
                    [Validation(Required=true)]
                    public GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult LiveResult { get; set; }
                    public class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult : TeaModel {
                        [NameInMap("Suggestion")]
                        [Validation(Required=true)]
                        public string Suggestion { get; set; }

                        [NameInMap("Label")]
                        [Validation(Required=true)]
                        public string Label { get; set; }

                        [NameInMap("MaxScore")]
                        [Validation(Required=true)]
                        public string MaxScore { get; set; }

                        [NameInMap("AverageScore")]
                        [Validation(Required=true)]
                        public string AverageScore { get; set; }

                        [NameInMap("CounterList")]
                        [Validation(Required=true)]
                        public List<GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultCounterList> CounterList { get; set; }
                        public class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultCounterList : TeaModel {
                            [NameInMap("Label")]
                            [Validation(Required=true)]
                            public string Label { get; set; }

                            [NameInMap("Count")]
                            [Validation(Required=true)]
                            public int? Count { get; set; }

                        }

                        [NameInMap("TopList")]
                        [Validation(Required=true)]
                        public List<GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultTopList> TopList { get; set; }
                        public class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultTopList : TeaModel {
                            [NameInMap("Label")]
                            [Validation(Required=true)]
                            public string Label { get; set; }

                            [NameInMap("Score")]
                            [Validation(Required=true)]
                            public string Score { get; set; }

                            [NameInMap("Timestamp")]
                            [Validation(Required=true)]
                            public string Timestamp { get; set; }

                            [NameInMap("Url")]
                            [Validation(Required=true)]
                            public string Url { get; set; }

                        }

                    }
                    [NameInMap("LogoResult")]
                    [Validation(Required=true)]
                    public GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult LogoResult { get; set; }
                    public class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult : TeaModel {
                        [NameInMap("Suggestion")]
                        [Validation(Required=true)]
                        public string Suggestion { get; set; }

                        [NameInMap("Label")]
                        [Validation(Required=true)]
                        public string Label { get; set; }

                        [NameInMap("MaxScore")]
                        [Validation(Required=true)]
                        public string MaxScore { get; set; }

                        [NameInMap("AverageScore")]
                        [Validation(Required=true)]
                        public string AverageScore { get; set; }

                        [NameInMap("CounterList")]
                        [Validation(Required=true)]
                        public List<GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultCounterList> CounterList { get; set; }
                        public class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultCounterList : TeaModel {
                            [NameInMap("Label")]
                            [Validation(Required=true)]
                            public string Label { get; set; }

                            [NameInMap("Count")]
                            [Validation(Required=true)]
                            public int? Count { get; set; }

                        }

                        [NameInMap("TopList")]
                        [Validation(Required=true)]
                        public List<GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultTopList> TopList { get; set; }
                        public class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultTopList : TeaModel {
                            [NameInMap("Label")]
                            [Validation(Required=true)]
                            public string Label { get; set; }

                            [NameInMap("Score")]
                            [Validation(Required=true)]
                            public string Score { get; set; }

                            [NameInMap("Timestamp")]
                            [Validation(Required=true)]
                            public string Timestamp { get; set; }

                            [NameInMap("Url")]
                            [Validation(Required=true)]
                            public string Url { get; set; }

                        }

                    }
                };

            }
        };

    }

}
