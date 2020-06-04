// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetTranscodeTemplateGroupResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TranscodeTemplateGroup")]
        [Validation(Required=true)]
        public GetTranscodeTemplateGroupResponseTranscodeTemplateGroup TranscodeTemplateGroup { get; set; }
        public class GetTranscodeTemplateGroupResponseTranscodeTemplateGroup : TeaModel {
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
            [NameInMap("TranscodeMode")]
            [Validation(Required=true)]
            public string TranscodeMode { get; set; }
            [NameInMap("AppId")]
            [Validation(Required=true)]
            public string AppId { get; set; }
            [NameInMap("TranscodeTemplateGroupId")]
            [Validation(Required=true)]
            public string TranscodeTemplateGroupId { get; set; }
            [NameInMap("TranscodeTemplateList")]
            [Validation(Required=true)]
            public List<GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList> TranscodeTemplateList { get; set; }
            public class GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList : TeaModel {
                    public string TranscodeTemplateId { get; set; }
                    public string Video { get; set; }
                    public string Audio { get; set; }
                    public string Container { get; set; }
                    public string MuxConfig { get; set; }
                    public string TransConfig { get; set; }
                    public string Definition { get; set; }
                    public string EncryptSetting { get; set; }
                    public string PackageSetting { get; set; }
                    public string SubtitleList { get; set; }
                    public string OpeningList { get; set; }
                    public string TailSlateList { get; set; }
                    public string TemplateName { get; set; }
                    public string TranscodeFileRegular { get; set; }
                    public string Clip { get; set; }
                    public string Rotate { get; set; }
                    public string Type { get; set; }
                    public string UserData { get; set; }
                    public List<string> WatermarkIds { get; set; }
            }
        };

    }

}
