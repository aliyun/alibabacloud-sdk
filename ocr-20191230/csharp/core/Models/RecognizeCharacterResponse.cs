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
                    public RecognizeCharacterResponseDataResultsTextRectangles TextRectangles { get; set; }
                    public class RecognizeCharacterResponseDataResultsTextRectangles : TeaModel {
                        [NameInMap("Angle")]
                        [Validation(Required=true)]
                        public int? Angle { get; set; }

                        [NameInMap("Left")]
                        [Validation(Required=true)]
                        public int? Left { get; set; }

                        [NameInMap("Top")]
                        [Validation(Required=true)]
                        public int? Top { get; set; }

                        [NameInMap("Width")]
                        [Validation(Required=true)]
                        public int? Width { get; set; }

                        [NameInMap("Height")]
                        [Validation(Required=true)]
                        public int? Height { get; set; }

                    }
            }
        };

    }

}
