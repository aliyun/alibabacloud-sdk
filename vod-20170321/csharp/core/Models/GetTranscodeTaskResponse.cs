// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetTranscodeTaskResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TranscodeTask")]
        [Validation(Required=true)]
        public GetTranscodeTaskResponseTranscodeTask TranscodeTask { get; set; }
        public class GetTranscodeTaskResponseTranscodeTask : TeaModel {
            [NameInMap("TranscodeTaskId")]
            [Validation(Required=true)]
            public string TranscodeTaskId { get; set; }
            [NameInMap("VideoId")]
            [Validation(Required=true)]
            public string VideoId { get; set; }
            [NameInMap("TaskStatus")]
            [Validation(Required=true)]
            public string TaskStatus { get; set; }
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
            [NameInMap("TranscodeJobInfoList")]
            [Validation(Required=true)]
            public List<GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList> TranscodeJobInfoList { get; set; }
            public class GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList : TeaModel {
                    public string TranscodeJobId { get; set; }
                    public string TranscodeTemplateId { get; set; }
                    public string TranscodeJobStatus { get; set; }
                    public string CreationTime { get; set; }
                    public string CompleteTime { get; set; }
                    public long TranscodeProgress { get; set; }
                    public string InputFileUrl { get; set; }
                    public string Priority { get; set; }
                    public string ErrorCode { get; set; }
                    public string ErrorMessage { get; set; }
                    public string Definition { get; set; }
                    public GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile OutputFile { get; set; }
                    public class GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile : TeaModel {
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

                        [NameInMap("Encryption")]
                        [Validation(Required=true)]
                        public string Encryption { get; set; }

                        [NameInMap("AudioStreamList")]
                        [Validation(Required=true)]
                        public string AudioStreamList { get; set; }

                        [NameInMap("VideoStreamList")]
                        [Validation(Required=true)]
                        public string VideoStreamList { get; set; }

                        [NameInMap("SubtitleStreamList")]
                        [Validation(Required=true)]
                        public string SubtitleStreamList { get; set; }

                        [NameInMap("OutputFileUrl")]
                        [Validation(Required=true)]
                        public string OutputFileUrl { get; set; }

                        [NameInMap("WatermarkIdList")]
                        [Validation(Required=true)]
                        public List<string> WatermarkIdList { get; set; }

                    }
            }
        };

    }

}
