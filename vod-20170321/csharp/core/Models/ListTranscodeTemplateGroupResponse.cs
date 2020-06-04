// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class ListTranscodeTemplateGroupResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TranscodeTemplateGroupList")]
        [Validation(Required=true)]
        public List<ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList> TranscodeTemplateGroupList { get; set; }
        public class ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList : TeaModel {
            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }

            [NameInMap("ModifyTime")]
            [Validation(Required=true)]
            public string ModifyTime { get; set; }

            [NameInMap("Name")]
            [Validation(Required=true)]
            public string Name { get; set; }

            [NameInMap("IsDefault")]
            [Validation(Required=true)]
            public string IsDefault { get; set; }

            [NameInMap("Locked")]
            [Validation(Required=true)]
            public string Locked { get; set; }

            [NameInMap("TranscodeTemplateGroupId")]
            [Validation(Required=true)]
            public string TranscodeTemplateGroupId { get; set; }

            [NameInMap("TranscodeMode")]
            [Validation(Required=true)]
            public string TranscodeMode { get; set; }

            [NameInMap("AppId")]
            [Validation(Required=true)]
            public string AppId { get; set; }

        }

    }

}
