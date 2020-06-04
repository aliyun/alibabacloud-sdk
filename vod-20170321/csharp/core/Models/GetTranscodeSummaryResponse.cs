// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetTranscodeSummaryResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TranscodeSummaryList")]
        [Validation(Required=true)]
        public List<GetTranscodeSummaryResponseTranscodeSummaryList> TranscodeSummaryList { get; set; }
        public class GetTranscodeSummaryResponseTranscodeSummaryList : TeaModel {
            [NameInMap("VideoId")]
            [Validation(Required=true)]
            public string VideoId { get; set; }

            [NameInMap("TranscodeStatus")]
            [Validation(Required=true)]
            public string TranscodeStatus { get; set; }

            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }

            [NameInMap("CompleteTime")]
            [Validation(Required=true)]
            public string CompleteTime { get; set; }

            [NameInMap("Trigger")]
            [Validation(Required=true)]
            public string Trigger { get; set; }

            [NameInMap("TranscodeTemplateGroupId")]
            [Validation(Required=true)]
            public string TranscodeTemplateGroupId { get; set; }

            [NameInMap("TranscodeJobInfoSummaryList")]
            [Validation(Required=true)]
            public List<GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList> TranscodeJobInfoSummaryList { get; set; }
            public class GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList : TeaModel {
                [NameInMap("TranscodeTemplateId")]
                [Validation(Required=true)]
                public string TranscodeTemplateId { get; set; }

                [NameInMap("TranscodeJobStatus")]
                [Validation(Required=true)]
                public string TranscodeJobStatus { get; set; }

                [NameInMap("CreationTime")]
                [Validation(Required=true)]
                public string CreationTime { get; set; }

                [NameInMap("CompleteTime")]
                [Validation(Required=true)]
                public string CompleteTime { get; set; }

                [NameInMap("TranscodeProgress")]
                [Validation(Required=true)]
                public long TranscodeProgress { get; set; }

                [NameInMap("ErrorCode")]
                [Validation(Required=true)]
                public string ErrorCode { get; set; }

                [NameInMap("ErrorMessage")]
                [Validation(Required=true)]
                public string ErrorMessage { get; set; }

                [NameInMap("Definition")]
                [Validation(Required=true)]
                public string Definition { get; set; }

                [NameInMap("Encryption")]
                [Validation(Required=true)]
                public string Encryption { get; set; }

                [NameInMap("Width")]
                [Validation(Required=true)]
                public string Width { get; set; }

                [NameInMap("Height")]
                [Validation(Required=true)]
                public string Height { get; set; }

                [NameInMap("Bitrate")]
                [Validation(Required=true)]
                public string Bitrate { get; set; }

                [NameInMap("Fps")]
                [Validation(Required=true)]
                public string Fps { get; set; }

                [NameInMap("Format")]
                [Validation(Required=true)]
                public string Format { get; set; }

                [NameInMap("Duration")]
                [Validation(Required=true)]
                public string Duration { get; set; }

                [NameInMap("Filesize")]
                [Validation(Required=true)]
                public long Filesize { get; set; }

                [NameInMap("WatermarkIdList")]
                [Validation(Required=true)]
                public List<string> WatermarkIdList { get; set; }

            }

        }

        [NameInMap("NonExistVideoIds")]
        [Validation(Required=true)]
        public List<string> NonExistVideoIds { get; set; }

    }

}
