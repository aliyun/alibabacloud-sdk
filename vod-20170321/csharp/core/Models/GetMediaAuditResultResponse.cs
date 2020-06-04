// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetMediaAuditResultResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("MediaAuditResult")]
        [Validation(Required=true)]
        public GetMediaAuditResultResponseMediaAuditResult MediaAuditResult { get; set; }
        public class GetMediaAuditResultResponseMediaAuditResult : TeaModel {
            [NameInMap("AbnormalModules")]
            [Validation(Required=true)]
            public string AbnormalModules { get; set; }
            [NameInMap("Label")]
            [Validation(Required=true)]
            public string Label { get; set; }
            [NameInMap("Suggestion")]
            [Validation(Required=true)]
            public string Suggestion { get; set; }
            [NameInMap("AudioResult")]
            [Validation(Required=true)]
            public List<GetMediaAuditResultResponseMediaAuditResultAudioResult> AudioResult { get; set; }
            public class GetMediaAuditResultResponseMediaAuditResultAudioResult : TeaModel {
                    public string Label { get; set; }
                    public string Scene { get; set; }
                    public string Score { get; set; }
                    public string Suggestion { get; set; }
            }
            [NameInMap("ImageResult")]
            [Validation(Required=true)]
            public List<GetMediaAuditResultResponseMediaAuditResultImageResult> ImageResult { get; set; }
            public class GetMediaAuditResultResponseMediaAuditResultImageResult : TeaModel {
                    public string Label { get; set; }
                    public string Suggestion { get; set; }
                    public string Type { get; set; }
                    public string Url { get; set; }
                    public List<GetMediaAuditResultResponseMediaAuditResultImageResultResult> Result { get; set; }
                    public class GetMediaAuditResultResponseMediaAuditResultImageResultResult : TeaModel {
                            public string Label { get; set; }
                            public string Scene { get; set; }
                            public string Score { get; set; }
                            public string Suggestion { get; set; }
                    }
            }
            [NameInMap("TextResult")]
            [Validation(Required=true)]
            public List<GetMediaAuditResultResponseMediaAuditResultTextResult> TextResult { get; set; }
            public class GetMediaAuditResultResponseMediaAuditResultTextResult : TeaModel {
                    public string Content { get; set; }
                    public string Label { get; set; }
                    public string Scene { get; set; }
                    public string Score { get; set; }
                    public string Suggestion { get; set; }
                    public string Type { get; set; }
            }
            [NameInMap("VideoResult")]
            [Validation(Required=true)]
            public GetMediaAuditResultResponseMediaAuditResultVideoResult VideoResult { get; set; }
            public class GetMediaAuditResultResponseMediaAuditResultVideoResult : TeaModel {
                [NameInMap("Label")]
                [Validation(Required=true)]
                public string Label { get; set; }

                [NameInMap("Suggestion")]
                [Validation(Required=true)]
                public string Suggestion { get; set; }

                [NameInMap("PornResult")]
                [Validation(Required=true)]
                public GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult PornResult { get; set; }
                public class GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult : TeaModel {
                    [NameInMap("AverageScore")]
                    [Validation(Required=true)]
                    public string AverageScore { get; set; }
                    [NameInMap("Label")]
                    [Validation(Required=true)]
                    public string Label { get; set; }
                    [NameInMap("MaxScore")]
                    [Validation(Required=true)]
                    public string MaxScore { get; set; }
                    [NameInMap("Suggestion")]
                    [Validation(Required=true)]
                    public string Suggestion { get; set; }
                    [NameInMap("CounterList")]
                    [Validation(Required=true)]
                    public List<GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultCounterList> CounterList { get; set; }
                    public class GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultCounterList : TeaModel {
                            public int? Count { get; set; }
                            public string Label { get; set; }
                    }
                    [NameInMap("TopList")]
                    [Validation(Required=true)]
                    public List<GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultTopList> TopList { get; set; }
                    public class GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultTopList : TeaModel {
                            public string Label { get; set; }
                            public string Score { get; set; }
                            public string Timestamp { get; set; }
                            public string Url { get; set; }
                    }
                };

                [NameInMap("AdResult")]
                [Validation(Required=true)]
                public GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult AdResult { get; set; }
                public class GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult : TeaModel {
                    [NameInMap("AverageScore")]
                    [Validation(Required=true)]
                    public string AverageScore { get; set; }
                    [NameInMap("Label")]
                    [Validation(Required=true)]
                    public string Label { get; set; }
                    [NameInMap("MaxScore")]
                    [Validation(Required=true)]
                    public string MaxScore { get; set; }
                    [NameInMap("Suggestion")]
                    [Validation(Required=true)]
                    public string Suggestion { get; set; }
                    [NameInMap("CounterList")]
                    [Validation(Required=true)]
                    public List<GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultCounterList> CounterList { get; set; }
                    public class GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultCounterList : TeaModel {
                            public int? Count { get; set; }
                            public string Label { get; set; }
                    }
                    [NameInMap("TopList")]
                    [Validation(Required=true)]
                    public List<GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultTopList> TopList { get; set; }
                    public class GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultTopList : TeaModel {
                            public string Label { get; set; }
                            public string Score { get; set; }
                            public string Timestamp { get; set; }
                            public string Url { get; set; }
                    }
                };

                [NameInMap("LogoResult")]
                [Validation(Required=true)]
                public GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult LogoResult { get; set; }
                public class GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult : TeaModel {
                    [NameInMap("AverageScore")]
                    [Validation(Required=true)]
                    public string AverageScore { get; set; }
                    [NameInMap("Label")]
                    [Validation(Required=true)]
                    public string Label { get; set; }
                    [NameInMap("MaxScore")]
                    [Validation(Required=true)]
                    public string MaxScore { get; set; }
                    [NameInMap("Suggestion")]
                    [Validation(Required=true)]
                    public string Suggestion { get; set; }
                    [NameInMap("CounterList")]
                    [Validation(Required=true)]
                    public List<GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultCounterList> CounterList { get; set; }
                    public class GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultCounterList : TeaModel {
                            public int? Count { get; set; }
                            public string Label { get; set; }
                    }
                    [NameInMap("TopList")]
                    [Validation(Required=true)]
                    public List<GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultTopList> TopList { get; set; }
                    public class GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultTopList : TeaModel {
                            public string Label { get; set; }
                            public string Score { get; set; }
                            public string Timestamp { get; set; }
                            public string Url { get; set; }
                    }
                };

                [NameInMap("LiveResult")]
                [Validation(Required=true)]
                public GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult LiveResult { get; set; }
                public class GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult : TeaModel {
                    [NameInMap("AverageScore")]
                    [Validation(Required=true)]
                    public string AverageScore { get; set; }
                    [NameInMap("Label")]
                    [Validation(Required=true)]
                    public string Label { get; set; }
                    [NameInMap("MaxScore")]
                    [Validation(Required=true)]
                    public string MaxScore { get; set; }
                    [NameInMap("Suggestion")]
                    [Validation(Required=true)]
                    public string Suggestion { get; set; }
                    [NameInMap("CounterList")]
                    [Validation(Required=true)]
                    public List<GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultCounterList> CounterList { get; set; }
                    public class GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultCounterList : TeaModel {
                            public int? Count { get; set; }
                            public string Label { get; set; }
                    }
                    [NameInMap("TopList")]
                    [Validation(Required=true)]
                    public List<GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultTopList> TopList { get; set; }
                    public class GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultTopList : TeaModel {
                            public string Label { get; set; }
                            public string Score { get; set; }
                            public string Timestamp { get; set; }
                            public string Url { get; set; }
                    }
                };

                [NameInMap("TerrorismResult")]
                [Validation(Required=true)]
                public GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult TerrorismResult { get; set; }
                public class GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult : TeaModel {
                    [NameInMap("AverageScore")]
                    [Validation(Required=true)]
                    public string AverageScore { get; set; }
                    [NameInMap("Label")]
                    [Validation(Required=true)]
                    public string Label { get; set; }
                    [NameInMap("MaxScore")]
                    [Validation(Required=true)]
                    public string MaxScore { get; set; }
                    [NameInMap("Suggestion")]
                    [Validation(Required=true)]
                    public string Suggestion { get; set; }
                    [NameInMap("CounterList")]
                    [Validation(Required=true)]
                    public List<GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultCounterList> CounterList { get; set; }
                    public class GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultCounterList : TeaModel {
                            public int? Count { get; set; }
                            public string Label { get; set; }
                    }
                    [NameInMap("TopList")]
                    [Validation(Required=true)]
                    public List<GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultTopList> TopList { get; set; }
                    public class GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultTopList : TeaModel {
                            public string Label { get; set; }
                            public string Score { get; set; }
                            public string Timestamp { get; set; }
                            public string Url { get; set; }
                    }
                };

            }
        };

    }

}
