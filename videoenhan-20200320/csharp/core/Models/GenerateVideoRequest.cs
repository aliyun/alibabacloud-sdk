// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Videoenhan20200320.Models
{
    public class GenerateVideoRequest : TeaModel {
        [NameInMap("FileList")]
        [Validation(Required=true)]
        public List<GenerateVideoRequestFileList> FileList { get; set; }
        public class GenerateVideoRequestFileList : TeaModel {
            [NameInMap("FileUrl")]
            [Validation(Required=true)]
            public string FileUrl { get; set; }

            [NameInMap("FileName")]
            [Validation(Required=true)]
            public string FileName { get; set; }

            [NameInMap("Type")]
            [Validation(Required=true)]
            public string Type { get; set; }

        }

        [NameInMap("Scene")]
        [Validation(Required=false)]
        public string Scene { get; set; }

        [NameInMap("Width")]
        [Validation(Required=false)]
        public int? Width { get; set; }

        [NameInMap("Height")]
        [Validation(Required=false)]
        public int? Height { get; set; }

        [NameInMap("Style")]
        [Validation(Required=false)]
        public string Style { get; set; }

        [NameInMap("Duration")]
        [Validation(Required=false)]
        public float? Duration { get; set; }

        [NameInMap("DurationAdaption")]
        [Validation(Required=false)]
        public bool? DurationAdaption { get; set; }

        [NameInMap("TransitionStyle")]
        [Validation(Required=false)]
        public string TransitionStyle { get; set; }

        [NameInMap("SmartEffect")]
        [Validation(Required=false)]
        public bool? SmartEffect { get; set; }

        [NameInMap("PuzzleEffect")]
        [Validation(Required=false)]
        public bool? PuzzleEffect { get; set; }

        [NameInMap("Mute")]
        [Validation(Required=false)]
        public bool? Mute { get; set; }

    }

}
