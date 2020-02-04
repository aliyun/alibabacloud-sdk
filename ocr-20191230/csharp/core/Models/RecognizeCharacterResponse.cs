// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Ocr.Models
{
    public class RecognizeCharacterResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeCharacterResponseData Data { get; set; }
        public class RecognizeCharacterResponseData : TeaModel {
            [NameInMap("Results")]
            [Validation(Required=true)]
            public List<RecognizeCharacterResponseDataResults> Results { get; set; }
            public class RecognizeCharacterResponseDataResults : TeaModel {
                    public float Probability { get; set; }
                    public string Text { get; set; }
                    public List<RecognizeCharacterResponseDataResultsTextRectangles> TextRectangles { get; set; }
                    public class RecognizeCharacterResponseDataResultsTextRectangles : TeaModel {
                            public int? Angle { get; set; }
                            public int? Left { get; set; }
                            public int? Top { get; set; }
                            public int? Width { get; set; }
                            public int? Height { get; set; }
                    }
            }
        };

    }

}
