// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class ListTranscodeTaskResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TranscodeTaskList")]
        [Validation(Required=true)]
        public List<ListTranscodeTaskResponseTranscodeTaskList> TranscodeTaskList { get; set; }
        public class ListTranscodeTaskResponseTranscodeTaskList : TeaModel {
            [NameInMap("TranscodeTaskId")]
            [Validation(Required=true)]
            public string TranscodeTaskId { get; set; }

            [NameInMap("VideoId")]
            [Validation(Required=true)]
            public string VideoId { get; set; }

            [NameInMap("TaskStatus")]
            [Validation(Required=true)]
            public string TaskStatus { get; set; }

            [NameInMap("TranscodeTemplateGroupId")]
            [Validation(Required=true)]
            public string TranscodeTemplateGroupId { get; set; }

            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }

            [NameInMap("CompleteTime")]
            [Validation(Required=true)]
            public string CompleteTime { get; set; }

            [NameInMap("Trigger")]
            [Validation(Required=true)]
            public string Trigger { get; set; }

        }

    }

}
